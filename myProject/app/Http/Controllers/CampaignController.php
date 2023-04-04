<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Campaign;
use App\Models\MoneyCampaign;
use App\Models\ObjectCampaign;


class CampaignController extends Controller
{
    function index()
    {
        $campaignMoney = MoneyCampaign::getAllNotTerminate();
        $campaignObject = ObjectCampaign::getAll();
        for($i = 0 ; $i < sizeof($campaignMoney); $i++){
            $total = $campaignMoney[$i]->total;
            $goal = $campaignMoney[$i]->Goal;
            $percent = ($total/$goal)*100;
            $progressBar[$i] = $percent;
        }
        return view('welcome',compact(['campaignMoney','campaignObject','progressBar']));
    }

    function search(){
        $name =$_GET['name'];
        $campaignMoney = null;
        $campaignObject = null;
        $progressBar = Array();
        if($name=="บริจาคเงิน"){
            $campaignMoney = MoneyCampaign::getAllNotTerminate();
            for($i = 0 ; $i < sizeof($campaignMoney); $i++){
                $total = $campaignMoney[$i]->total;
                $goal = $campaignMoney[$i]->Goal;
                $percent = ($total/$goal)*100;
                $progressBar[$i] = $percent;
            }
        }else if($name ==""){
            $campaignMoney = MoneyCampaign::getAllNotTerminate();
            $campaignObject = ObjectCampaign::getAll();
            for($i = 0 ; $i < sizeof($campaignMoney); $i++){
                $total = $campaignMoney[$i]->total;
                $goal = $campaignMoney[$i]->Goal;
                $percent = ($total/$goal)*100;
                $progressBar[$i] = $percent;
            }
        }
        else{
            $campaignObject = ObjectCampaign::searchByName($name);
            if($campaignObject == null){
                $campaignObject = ObjectCampaign::getAll();
            }
        }
        
        return view('search.search',['campaignObject'=>$campaignObject,'campaignMoney'=>$campaignMoney,'progressBar'=>$progressBar]);
    }

    function indexx()
    {
        $campaign = campaign::getAll();
        $campaignMoney = campaign::getMoney();
        $campaignObject = campaign::getObject();
        $progressBar = Array();
        for($i = 0 ; $i < sizeof($campaignMoney); $i++){
            $total = $campaignMoney[$i]->total;
            $goal = $campaignMoney[$i]->Goal;
            $percent = ($total/$goal)*100;
            $progressBar[$i] = $percent;
        }

        return view('indexM',compact(['campaign','campaignMoney','campaignObject','progressBar']));
    }

    function food()
    {
        $campaign = campaign::getAll();
        $campaignMoney = campaign::getMoney();
        $campaignObject = campaign::getObject();
        return view('search.food',compact(['campaign','campaignMoney','campaignObject']));
    }

    function foodM()
    {
        $campaign = campaign::getAll();
        $campaignMoney = campaign::getMoney();
        $campaignObject = campaign::getObject();
        return view('search.foodM',compact(['campaign','campaignMoney','campaignObject']));
    }

    function foodU()
    {
        $campaign = campaign::getAll();
        $campaignMoney = campaign::getMoney();
        $campaignObject = campaign::getObject();
        return view('search.foodU',compact(['campaign','campaignMoney','campaignObject']));
    }

    function apparel()
    {
        $campaign = campaign::getAll();
        $campaignMoney = campaign::getMoney();
        $campaignObject = campaign::getObject();
        return view('search.apparel',compact(['campaign','campaignMoney','campaignObject']));
    }

    function apparelM()
    {
        $campaign = campaign::getAll();
        $campaignMoney = campaign::getMoney();
        $campaignObject = campaign::getObject();
        return view('search.apparelM',compact(['campaign','campaignMoney','campaignObject']));
    }

    function apparelU()
    {
        $campaign = campaign::getAll();
        $campaignMoney = campaign::getMoney();
        $campaignObject = campaign::getObject();
        return view('search.apparelU',compact(['campaign','campaignMoney','campaignObject']));
    }

    function medicine()
    {
        $campaign = campaign::getAll();
        $campaignMoney = campaign::getMoney();
        $campaignObject = campaign::getObject();
        return view('search.medicine',compact(['campaign','campaignMoney','campaignObject']));
    }

    function medicineM()
    {
        $campaign = campaign::getAll();
        $campaignMoney = campaign::getMoney();
        $campaignObject = campaign::getObject();
        return view('search.medicineM',compact(['campaign','campaignMoney','campaignObject']));
    }

    function medicineU()
    {
        $campaign = campaign::getAll();
        $campaignMoney = campaign::getMoney();
        $campaignObject = campaign::getObject();
        return view('search.medicineU',compact(['campaign','campaignMoney','campaignObject']));
    }

    function money()
    {
        $campaign = campaign::getAll();
        $campaignMoney = campaign::getMoney();
        $campaignObject = campaign::getObject();
        $progressBar = Array();
        for($i = 0 ; $i < sizeof($campaignMoney); $i++){
            $total = $campaignMoney[$i]->total;
            $goal = $campaignMoney[$i]->Goal;
            $percent = ($total/$goal)*100;
            $progressBar[$i] = $percent;
        }
        return view('search.money',compact(['campaign','campaignMoney','campaignObject','progressBar']));
    }

    function moneyM()
    {
        $campaign = campaign::getAll();
        $campaignMoney = campaign::getMoney();
        $campaignObject = campaign::getObject();
        $progressBar = Array();
        for($i = 0 ; $i < sizeof($campaignMoney); $i++){
            $total = $campaignMoney[$i]->total;
            $goal = $campaignMoney[$i]->Goal;
            $percent = ($total/$goal)*100;
            $progressBar[$i] = $percent;
        }
        return view('search.moneyM',compact(['campaign','campaignMoney','campaignObject','progressBar']));
    }

    function moneyU()
    {
        $campaign = campaign::getAll();
        $campaignMoney = campaign::getMoney();
        $campaignObject = campaign::getObject();
        $progressBar = Array();
        for($i = 0 ; $i < sizeof($campaignMoney); $i++){
            $total = $campaignMoney[$i]->total;
            $goal = $campaignMoney[$i]->Goal;
            $percent = ($total/$goal)*100;
            $progressBar[$i] = $percent;
        }
        return view('search.moneyU',compact(['campaign','campaignMoney','campaignObject','progressBar']));
    }

    function editCampaign($id){
        $campaign = Campaign::getById($id);
        return view('progress.editMoneyCampaign',['campaign'=>$campaign]);
    }

    function update(Request $request){
        $campaign = new Campaign;
        if($request->hasFile('campaign_image')){
            $campaign_image = $request->file('campaign_image');
            $campaign_image_name = $campaign_image->getClientOriginalName();
            $path = $campaign_image->move(public_path('images/campaign'), $campaign_image_name);
            DB::table('campaign')->where('Id',$request->id)->update(['Name'=>$request->name,'Description'=>$request->Description, 'Image'=>$campaign_image_name]);
        }
        else{
            DB::table('campaign')->where('Id',$request->id)->update(['Name'=>$request->name,'Description'=>$request->Description]);
        }

        return redirect()->route('managerPage');
    }

    function requestTerminate($id){
        $campaign = Campaign::getById($id);
        return view('progress.requestTerminate',['campaign'=>$campaign]);
    }

    function request(Request $request)
    {   
        $campaign = Campaign::terminateRequest($request->id,$request->Description);

        return redirect()->route('managerPage');
    }
}
