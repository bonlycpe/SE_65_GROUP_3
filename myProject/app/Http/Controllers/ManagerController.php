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
        $managers = ManagerRequest::getAll();
        return view('staff.staff_verify',compact('managers'));
    }
    function approved(){
        $allApprove = ManagerRequest::getAllApprove();
        return view('staff.approvedUser',compact('allApprove'));
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
    function terminated(){
        $campaign = Campaign::getTerminateCampaign();
        return view('staff.closedCampaign',compact('campaign'));
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
    function search(Request $req){
        $data = $req->searching;
        $allApprove = ManagerRequest::search($data);

        return view('staff.approvedUser',compact('allApprove'));
    }

    function terminateSearch(Request $req){
        $data = $req->searching;
        $campaign = Campaign::search($data);
        return view('staff.closedCampaign',compact('campaign'));
    }
}
