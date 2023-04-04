<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Campaign;
use App\Models\MoneyCampaign;
use App\Models\ObjectCampaign;
use App\Models\UseInCampaign;
class openCampaignMoneyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        $user = Auth::user();
        return view('openCampaignMoney',['user'=>$user]);
    }

    public function create(Request $request){
        $validatedData = $request->validate([
            'QR_image' => 'required|file',
        ], );

        $user = Auth::user();


        $name = $request->campaignName;
        $description = $request->description;
        $goal = $request->goal;

        //for image
        // $campaign_image = $request->file('campaign_image');
        // $campaign_image_name = $campaign_image->getClientOriginalName();
        // $path = $campaign_image->move(public_path('images/campaign'), $campaign_image_name);

        // $campaign = new Campaign;
        // $campaign->Name = $name;
        // $campaign->Description = $description;
        // $campaign->Status = 'ACTIVE';
        // $campaign->Image = $campaign_image->getClientOriginalName();
        // $campaign->save();

        if($request->hasFile('campaign_image')){
            $campaign_image = $request->file('campaign_image');
            $campaign_image_name = $campaign_image->getClientOriginalName();
            $path = $campaign_image->move(public_path('images/campaign'), $campaign_image_name);

            $campaign = new Campaign;
            $campaign->Name = $name;
            $campaign->Description = $description;
            $campaign->Status = 'ACTIVE';
            $campaign->Image = $campaign_image->getClientOriginalName();
            $campaign->save();
        }else{
            $campaign = new Campaign;
            $campaign->Name = $name;
            $campaign->Description = $description;
            $campaign->Status = 'ACTIVE';
            $campaign->save();
        }

        $campaign_id = (Campaign::getByName($name))->Id;
        $qr_image = $request->file('QR_image');
        $qr_image_name = $qr_image->getClientOriginalName();
        $path = $qr_image->move(public_path('images/qrcode'), $qr_image_name);

        $money_campaign = new MoneyCampaign;
        $money_campaign->campaign_money_id = $campaign_id;
        $money_campaign->Goal = $goal;
        $money_campaign->total = 0.0;
        $money_campaign->Image = $qr_image->getClientOriginalName();
        $money_campaign->save();

        $in_campaign = new UseInCampaign;
        $in_campaign->campaign_id = $campaign_id;
        $in_campaign->user_id = $user->id;
        $in_campaign->Role = 'CHAIRMAN';
        $in_campaign->save();


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
