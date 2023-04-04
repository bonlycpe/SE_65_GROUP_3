<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\ManagerRequest;
use App\Models\Staff;
use App\Models\UserDonate;
use App\Models\MoneyCampaign;
use App\Models\ObjectCampaign;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->role == 'STAFF') {
            $staff =  DB::table('Staff')->where('Id', $user->id)->first();
            if ($staff->Type == 'SYSTEMADMIN') {
                $staff = Staff::getAllStaff();
                return view('admin.admin', compact('staff'));
                //return view('index',['user'=>$user]);
            } else if ($staff->Type == 'MONEY') {
                $donate = UserDonate::getAllRequest();
                $donateAll = Userdonate::getAll();
                return view('staff.staff_money', compact(['donate', 'donateAll']));
            } else if ($staff->Type == 'VERIFY') {

                $managers = ManagerRequest::getAll();
                $allApprove = ManagerRequest::getAllApprove();
                return view('staff.staff_verify', compact(['managers', 'allApprove']));
            } else {
                return view('index', ['user' => $user]);
                $campaignMoney = MoneyCampaign::getAllNotTerminate();
                $campaignObject = ObjectCampaign::getAll();
                return view('index', ['campaignMoney' => $campaignMoney], ['campaignObject' => $campaignObject]);
            }
        } else {
            $campaignMoney = MoneyCampaign::getAllNotTerminate();
            $campaignObject = ObjectCampaign::getAllNotTerminate();
            $progressBar = Array();
            for($i = 0 ; $i < sizeof($campaignMoney); $i++){
                $total = $campaignMoney[$i]->total;
                $goal = $campaignMoney[$i]->Goal;
                $percent = ($total/$goal)*100;
                $progressBar[$i] = $percent;
            }
            if($user ->permission == 'APPROVE'){
                return view('indexM',['campaignMoney'=>$campaignMoney],['campaignObject'=>$campaignObject,'progressBar'=>$progressBar]);
            }else{
                //dd($progressBar);
                return view('index',['campaignMoney'=>$campaignMoney,'campaignObject'=>$campaignObject,'progressBar'=>$progressBar]);
            }
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}