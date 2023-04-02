<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Campaign;
use App\Models\ObjectInCampaign;
use App\Models\MoneyCampaign;
use App\Models\ObjectCampaign;
use App\Models\UseInCampaign;
use App\Models\User;
class openCampaignObjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        $user = Auth::user();
        return view('openCampaignObject',['user'=>$user]);
    }

    public function create(Request $request){

        $user = Auth::user();

        $campaign_name = $request->campaignName;
        $object_name = $request->objectName;
        $description = $request->description;
        $object_amount = $request->objectAmount;
        $campaign_tag = $request->tag;

        //campaign
        $campaign_image = $request->file('campaign_image');
        $campaign_image_name = $request->name.'.'.$campaign_image->getClientOriginalExtension();
        $path = $campaign_image->move(public_path('images/campaign'), $campaign_image_name);

        $campaign = new Campaign;
        $campaign->Name = $campaign_name;
        $campaign->Description = $description;
        $campaign->Status = 'ACTIVE';
        $campaign->Image = $campaign_image->getClientOriginalName();
        $campaign->save();

        //campaign object
        $campaign_id = (Campaign::getByName($campaign_name))->Id;
        $object_campaign = new ObjectCampaign;
        $object_campaign->campaign_object_id = $campaign_id;
        $object_campaign->Tag = $campaign_tag;
        $object_campaign->save();

        //object
        $object = new ObjectInCampaign;
        $object->Name = $object_name;
        $object->Amount = $object_amount;
        $object->campaign_object_id = $campaign_id;
        $object->save();
        
        //Campaign manager
        $board_id = array($user->id,$request->id_board_1,$request->id_board_2,$request->id_board_3);
        for($i = 0; $i<4 ;$i++){
            $in_campaign = new UseInCampaign;
            $in_campaign->campaign_id = $campaign_id;
            $in_campaign->user_id = $board_id[$i];
            if($i!=0) $in_campaign->Role = 'BOARD';
            else $in_campaign->Role = 'CHAIRMAN';
            $in_campaign->save();    
        }

        $campaignMoney = MoneyCampaign::getAll();
        $campaignObject = ObjectCampaign::getAll();
        $progressBar = Array();
        for($i = 0 ; $i < sizeof($campaignMoney); $i++){
            $total = $campaignMoney[$i]->total;
            $goal = $campaignMoney[$i]->Goal;
            $percent = ($total/$goal)*100;
            $progressBar[$i] = $percent;
        }

        return view('managerPage',['campaignMoney'=>$campaignMoney],['campaignObject'=>$campaignObject,'progressBar'=>$progressBar]);
    }
}
