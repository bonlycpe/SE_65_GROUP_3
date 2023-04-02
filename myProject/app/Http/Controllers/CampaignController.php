<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Campaign;
use App\Models\UserDonate;

class CampaignController extends Controller
{
    function index()
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
        // dd($progressBar);
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
        $campaign = campaign::getAll();
        $campaignMoney = campaign::getMoney();
        $campaignObject = campaign::getObject();
        return view('search.food',compact(['campaign','campaignMoney','campaignObject']));
    }

    function apparel()
    {
        $campaign = campaign::getAll();
        $campaignMoney = campaign::getMoney();
        $campaignObject = campaign::getObject();
        return view('search.apparel',compact(['campaign','campaignMoney','campaignObject']));
    }

    function medicine()
    {
        $campaign = campaign::getAll();
        $campaignMoney = campaign::getMoney();
        $campaignObject = campaign::getObject();
        return view('search.medicine',compact(['campaign','campaignMoney','campaignObject']));
    }

    function money()
    {
        $campaign = campaign::getAll();
        $campaignMoney = campaign::getMoney();
        $campaignObject = campaign::getObject();
        return view('search.money',compact(['campaign','campaignMoney','campaignObject']));
    }
}