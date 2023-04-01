<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Campaign;

class CampaignController extends Controller
{
    function index()
    {
        $campaign = campaign::getAll();
        $campaignMoney = campaign::getMoney();
        $campaignObject = campaign::getObject();
        return view('welcome',compact(['campaign','campaignMoney','campaignObject']));
    }

    function indexx()
    {
        $campaign = campaign::getAll();
        $campaignMoney = campaign::getMoney();
        $campaignObject = campaign::getObject();
        return view('index',compact(['campaign','campaignMoney','campaignObject']));
    }

}
