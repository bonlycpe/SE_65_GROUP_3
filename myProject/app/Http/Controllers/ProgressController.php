<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Progress;
use App\Models\Campaign;
use App\Models\moneyProgress;
use App\Models\ObjectRequest;
class ProgressController extends Controller
{

    function index($id)
    {
        $progress = Progress::getAllByCampaignId($id);
        //dd($progress);
        for ($x = 0; $x < sizeof($progress); $x++) {
            $date = $progress[$x]->Date;
            $newDate = date("d M Y", strtotime($date));
            $progress[$x]->Date = $newDate;
        }
        $campaign = Campaign::getById($id);
        $p = sizeof($progress);
        if($p == 0){
            $progress = null;
        }

        return view('progress.index',['progress'=>$progress,'campaign'=>$campaign]);
    }

    function indexGuest($id)
    {
        $progress = Progress::getAllByCampaignId($id);
        //dd($progress);
        for ($x = 0; $x < sizeof($progress); $x++) {
            $date = $progress[$x]->Date;
            $newDate = date("d M Y", strtotime($date));
            $progress[$x]->Date = $newDate;
        }
        $campaign = Campaign::getById($id);
        $p = sizeof($progress);
        if($p == 0){
            $progress = null;
        }

        return view('progress.indexGuest',['progress'=>$progress,'campaign'=>$campaign]);
    }

    function indexManager($id)
    {
        $progress = Progress::getAllByCampaignId($id);
        //dd($progress);
        for ($x = 0; $x < sizeof($progress); $x++) {
            $date = $progress[$x]->Date;
            $newDate = date("d M Y", strtotime($date));
            $progress[$x]->Date = $newDate;
        }
        $campaign = Campaign::getById($id);
        $p = sizeof($progress);
        if($p == 0){
            $progress = null;
        }

        return view('progress.indexManager',['progress'=>$progress,'campaign'=>$campaign]);
    }

    function toAddProgress($id)
    {
        $progress = Progress::getAllByCampaignId($id);
        //dd($progress);
        for ($x = 0; $x < sizeof($progress); $x++) {
            $date = $progress[$x]->Date;
            $newDate = date("d M Y", strtotime($date));
            $progress[$x]->Date = $newDate;
        }
        $campaign = Campaign::getById($id);
        $p = sizeof($progress);
        if($p == 0){
            $progress = null;
        }

        return view('progress.addProgress',['progress'=>$progress,'campaign'=>$campaign]);
    }

    
    function indexAdd($id)
    {
        $campaign = Campaign::getById($id);
        return view('progress.addProgressPage',['campaign'=>$campaign]);
    }
    

    function add(Request $request)
    {
        // To move page
        $id = $request->id;
        $progress = Progress::getAllByCampaignId($id);

        for ($x = 0; $x < sizeof($progress); $x++) {
            $date = $progress[$x]->Date;
            $newDate = date("d M Y", strtotime($date));
            $progress[$x]->Date = $newDate;
        }
        $campaign = Campaign::getById($id);
        $p = sizeof($progress);
        if($p == 0){
            $progress = null;
        }

        //To add DB information
        $Description = $request->Description;
        $campaign_image = $request->file('progress_image');
        $campaign_image_name = $campaign_image->getClientOriginalName();
        $path = $campaign_image->move(public_path('images/progress'), $campaign_image_name);

        $moneyProgress = new moneyProgress;
        $moneyProgress->campaign_money_id = $id;
        $moneyProgress->Description = $Description;
        $moneyProgress->Image = $campaign_image->getClientOriginalName();
        $moneyProgress->save();

        return redirect()->route('addProgress', ['id' => $id]);
    }

    function indexObject($id)
    {
        
        $progress = ObjectRequest::getAllApproveByCampaignId($id);
        //dd($progress);
        for ($x = 0; $x < sizeof($progress); $x++) {
            $date = $progress[$x]->Date;
            $newDate = date("d M Y", strtotime($date));
            $progress[$x]->Date = $newDate;
        }
        $campaign = Campaign::getById($id);
        $p = sizeof($progress);
        if($p == 0){
            $progress = null;
        }

        return view('progress.indexObject',['progress'=>$progress,'campaign'=>$campaign]);
    }

    function indexObjectGuest($id)
    {
        
        $progress = ObjectRequest::getAllApproveByCampaignId($id);
        //dd($progress);
        for ($x = 0; $x < sizeof($progress); $x++) {
            $date = $progress[$x]->Date;
            $newDate = date("d M Y", strtotime($date));
            $progress[$x]->Date = $newDate;
        }
        $campaign = Campaign::getById($id);
        $p = sizeof($progress);
        if($p == 0){
            $progress = null;
        }

        return view('progress.indexObjectGuest',['progress'=>$progress,'campaign'=>$campaign]);
    }

    function indexObjectManager($id)
    {
        
        $progress = ObjectRequest::getAllApproveByCampaignId($id);
        //dd($progress);
        for ($x = 0; $x < sizeof($progress); $x++) {
            $date = $progress[$x]->Date;
            $newDate = date("d M Y", strtotime($date));
            $progress[$x]->Date = $newDate;
        }
        $campaign = Campaign::getById($id);
        $p = sizeof($progress);
        if($p == 0){
            $progress = null;
        }

        return view('progress.indexObjectManager',['progress'=>$progress,'campaign'=>$campaign]);
    }

    function decisionObject($id)
    {
        $progress = ObjectRequest::getAllByCampaignId($id);
        //dd($progress);
        for ($x = 0; $x < sizeof($progress); $x++) {
            $date = $progress[$x]->Date;
            $newDate = date("d M Y", strtotime($date));
            $progress[$x]->Date = $newDate;
        }
        $campaign = Campaign::getById($id);
        $p = sizeof($progress);
        if($p == 0){
            $progress = null;
        }

        return view('decisionObject',['progress'=>$progress,'campaign'=>$campaign]);
    }


    
}