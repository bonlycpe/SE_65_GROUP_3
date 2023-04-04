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
        $campaign = campaign::getAll();
        $campaignMoney = MoneyCampaign::getAllNotTerminate();
        $campaignObject = ObjectCampaign::getAllNotTerminate();
        $progressBar = Array();
        for($i = 0 ; $i < sizeof($campaignMoney); $i++){
            $total = $campaignMoney[$i]->total;
            $goal = $campaignMoney[$i]->Goal;
            $percent = ($total/$goal)*100;
            $progressBar[$i] = $percent;
        }
        return view('welcome',compact(['campaign','campaignMoney','campaignObject','progressBar']));
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
        $campaignObject = ObjectCampaign::searchByName("Foods");
        return view('search.food',['campaignObject'=>$campaignObject]);
    }

    function foodM()
    {
        $campaign = campaign::getAll();
        $campaignMoney = campaign::getMoney();
        $campaignObject = campaign::getObject();
        return view('search.foodM',compact(['campaign','campaignMoney','campaignObject']));
    }

    function apparel()
    {
        $campaignObject = ObjectCampaign::searchByName("Apparel");
        return view('search.food',['campaignObject'=>$campaignObject]);
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
            $campaignObject = ObjectCampaign::getAllNotTerminate();
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

    function apparelM()
    {
        $campaign = campaign::getAll();
        $campaignMoney = campaign::getMoney();
        $campaignObject = campaign::getObject();
        return view('search.apparelM',compact(['campaign','campaignMoney','campaignObject']));
    }


    function medicine()
    {
        $campaignObject = ObjectCampaign::searchByName("Medicine");
        return view('search.food',['campaignObject'=>$campaignObject]);
    }

    function medicineM()
    {
        $campaign = campaign::getAll();
        $campaignMoney = campaign::getMoney();
        $campaignObject = campaign::getObject();
        return view('search.medicineM',compact(['campaign','campaignMoney','campaignObject']));
    }

    function money()
    {
        $campaignMoney = campaign::getMoney();
        $progressBar = Array();
        for($i = 0 ; $i < sizeof($campaignMoney); $i++){
            $total = $campaignMoney[$i]->total;
            $goal = $campaignMoney[$i]->Goal;
            $percent = ($total/$goal)*100;
            $progressBar[$i] = $percent;
        }
        return view('search.money',['campaignMoney'=>$campaignMoney,'progressBar'=>$progressBar]);
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

    function editCampaign($id){
        $campaign = Campaign::getById($id);
        return view('progress.editMoneyCampaign',['campaign'=>$campaign]);
    }
}