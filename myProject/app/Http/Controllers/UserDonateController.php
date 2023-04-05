<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UserDonate;

class UserDonateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        $donate = UserDonate::getAllRequest();
        $donateAll = Userdonate::getAll();
        return view('staff.staff_money',compact(['donate','donateAll']));
    }

    function moneyProgressPage($id)
    {
        $donate = UserDonate::getAllRequest();
        $donateAll = Userdonate::getAllApproveByCampaignId($id);
        return view('moneyProgress',compact(['donate','donateAll']));
    }

    function eSlipDonate($id)
    {
        $eslip = UserDonate::eslip($id);
        return view('progress.slip',compact('eslip'));
    }


    function donated(){
        $donateAll = Userdonate::getAll();
        return view('staff.donated',compact('donateAll'));
    }

    function approve(Request $req){
        UserDonate::approve($req->id);
        UserDonate::addMoney($req->campaign_money_id,(float)$req->amount);
        $money = UserDonate::getCampaignMoney($req->campaign_money_id);
        if((float)$money->get('total') >= (float)$money->get('Goal')){
            UserDonate::setCampaignFinished($req->campaign_money_id);
        }

        return redirect('staff_money');
    }
    function deny($id){
        UserDonate::deny($id);
        return redirect('staff_money');
    }

    function eslip($id){
        $eslip = UserDonate::eslip($id);
        return view('staff.slip',compact('eslip'));
    }
    function search(Request $req){
        $data = $req->searching;
        $donateAll = UserDonate::search($data);
        return view('staff.donated',compact('donateAll'));
    }

}