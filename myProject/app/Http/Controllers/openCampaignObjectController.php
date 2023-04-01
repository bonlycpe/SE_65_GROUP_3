<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Campaign;
use App\Models\ObjectInCampaign;
use App\Models\ObjectCampaign;
use App\Models\UseInCampaign;
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

        //for image
        $campaign_image = $request->file('campaign_image');
        $campaign_image_name = $request->name.'.'.$campaign_image->getClientOriginalExtension();
        $path = $campaign_image->move(public_path('images/campaign'), $campaign_image_name);

        $campaign = new Campaign;
        $campaign->Name = $campaign_name;
        $campaign->Description = $description;
        $campaign->Status = 'ACTIVE';
        $campaign->Image = $campaign_image->getClientOriginalName();
        $campaign->save();

        $campaign_id = (Campaign::getByName($campaign_name))->Id;
        $object_campaign = new ObjectCampaign;
        $object_campaign->campaign_object_id = $campaign_id;
        $object_campaign->Tag = $campaign_tag;
        $object_campaign->save();

        $object = new ObjectInCampaign;
        $object->Name = $object_name;
        $object->Amount = $object_amount;
        $object->campaign_object_id = $campaign_id;
        $object->save();

        // $in_campaign = new UseInCampaign;
        // $in_campaign->campaign_id = $campaign_id;
        // $in_campaign->user_id = $user->id;
        // $in_campaign->Role = 'CHAIRMAN';
        // $in_campaign->save();

        return redirect('managerPage');
    }
}
