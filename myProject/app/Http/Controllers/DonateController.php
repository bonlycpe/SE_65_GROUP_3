<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Campaign;
use App\Models\UserDonate;
use App\Models\MoneyCampaign;

class DonateController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $money = MoneyCampaign::getById($id);
        return view('user.donate',['campaign'=>$money]);
    }

    public function create(Request $request)
    {
        $user = Auth::user();

        $userDonate = new UserDonate;
        $userDonate->amount = $request->amount;
        $userDonate->Status = "REQUEST";
        $userDonate->campaign_money_id = $request->campaignId;
        $userDonate->user_id = $user->id;
        $userDonate->Timer = $request->time;
        $userDonate->date = $request->date;
        $userDonate->eSlip = null;
        if($request->hasFile('slip_image')){
            $image = $request->file('slip_image');
            $image_name = $request->originalName.'.'.$image->getClientOriginalExtension();
            $path = $image->move(public_path('images/e-slip'), $image->getClientOriginalName());
            $userDonate->eSlip = $image->getClientOriginalName();
            $userDonate->save();
        }
        else{
            $userDonate->save();
        }
        return redirect('home');
    }
}