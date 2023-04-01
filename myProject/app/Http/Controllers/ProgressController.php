<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Progress;
use App\Models\Campaign;
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
}