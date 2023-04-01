<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\UserDonate;
use App\Models\MoneyCampaign;
use App\Models\ObjectCampaign;
class ManagerPageController extends Controller
{
    function index()
    {
        $campaignMoney = MoneyCampaign::getAll();
        $campaignObject = ObjectCampaign::getAll();
        return view('managerPage',['campaignMoney'=>$campaignMoney],['campaignObject'=>$campaignObject]);
    }

    public function update(Request $request){
        $user = Auth::user();
        DB::table('users')->where('id',$user->id)->update(['citizen_id'=>$request->citizenId,'phone'=>$request->phone,'address'=>$request->address,'permission'=>'REQUEST']);
        return redirect('home');
    }
}
