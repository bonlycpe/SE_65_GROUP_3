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
        return view('welcome',compact(['campaign','campaignMoney','campaignObject']));
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
