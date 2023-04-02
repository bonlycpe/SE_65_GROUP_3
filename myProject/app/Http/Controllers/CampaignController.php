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
}