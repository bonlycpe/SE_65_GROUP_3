<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\UserDonate;
use App\Models\MoneyCampaign;
use App\Models\ObjectCampaign;
use App\Models\User;
use App\Models\UseInCampaign;
class ManagerPageController extends Controller
{
function index()
    {
        $user = Auth::user();
        $campaignMoney = UseInCampaign::getAllMoneyByUserId($user->id);
        $campaignObject = UseInCampaign::getAllObjectByUserId($user->id);
        if(sizeof($campaignObject) == 0){
            $campaignObject = null;
        }
        if(sizeof($campaignMoney) == 0){
            $campaignMoney = null;
        }
        $progressBar=array();
        for($i = 0 ; $i < sizeof($campaignMoney); $i++){
            $total = $campaignMoney[$i]->total;
            $goal = $campaignMoney[$i]->Goal;
            $percent = ($total/$goal)*100;
            $progressBar[$i] = $percent;
        }
        return view('managerPage',['campaignMoney'=>$campaignMoney],['campaignObject'=>$campaignObject,'progressBar'=>$progressBar]);
    }

    public function update(Request $request){
        $user = Auth::user();
        DB::table('users')->where('id',$user->id)->update(['citizen_id'=>$request->citizenId,'phone'=>$request->phone,'address'=>$request->address,'permission'=>'REQUEST']);
        return redirect('home');
    }

    public function callOpenCampaign(Request $request){
        $userEmail = (Auth::user())->email;
        $users = User::getAll();
        return view('openCampaignObject',['users' => $users],['userEmail'=>$userEmail]);
    }
}