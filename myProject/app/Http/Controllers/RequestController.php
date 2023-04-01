<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Campaign;
use App\Models\ObjectRequest;
use App\Models\ProjectUser;

class RequestController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $campaign = Campaign::getById($id);
        return view('user.request',['campaign'=>$campaign]);
    }

    public function create(Request $request)
    {
        $user = Auth::user();

        $users = ProjectUser::getAllUserInCampaignByCampaignId($request->campaignId);
        foreach($users as $u){
            $objectRequest = new ObjectRequest;
            $objectRequest->amount = (float)$request->amount;
            $objectRequest->Description = $request->description;
            $objectRequest->Status = "REQUEST";
            $objectRequest->user_id = $user->id;
            $objectRequest->campaign_object_id = $request->campaignId;
            $objectRequest->campaign_project_user_id = $u->Id;
            $objectRequest->save();
        }
        
        return redirect('home');
    }
}