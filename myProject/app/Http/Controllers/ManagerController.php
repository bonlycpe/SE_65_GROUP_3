<?php

namespace App\Http\Controllers;

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
}
