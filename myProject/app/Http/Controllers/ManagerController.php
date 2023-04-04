<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ManagerRequest;
class ManagerController extends Controller
{
    function index()
    {
        // $managers = DB::table('users')
        //         ->where('permission','=','REQUEST')
        //         ->select('firstname','lastname','email','username')
        //         ->get();
        $managers = ManagerRequest::getAll();
        $allApprove = ManagerRequest::getAllApprove();
        return view('staff.staff_verify',compact(['managers','allApprove']));
    }

    function approve($id)
    {   
        ManagerRequest::approve($id);
        return redirect('staff_verify');
    }
    function deny($id)
    {   
        ManagerRequest::deny($id);
        return redirect('staff_verify');
    }
    function info($id)
    {
        $info = ManagerRequest::info($id);
        return view('staff.userInfo',compact('info'));
    }
    function terminateCam(){
        $campaign = Campaign::getReqCampaign();
        $campaign1 = Campaign::getTerminateCampaign();
        return view('staff.terminate',compact('campaign','campaign1'));
    }
    function terminateInfo($id){
        $campaign = Campaign::getReqCampaignById($id);
        return view('staff.terminateInfo',compact('campaign'));
    }
    function terminateDeny($id){
        Campaign::terminateDeny($id);
        return redirect('terminatereq');
    }
    function terminateApprove($id){
        Campaign::terminateApprove($id);
        return redirect('terminatereq');
    }
}
