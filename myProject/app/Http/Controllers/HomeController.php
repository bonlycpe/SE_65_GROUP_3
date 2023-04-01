<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\UserDonate;
use App\Models\ManagerRequest;

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
        if($user->role == 'STAFF'){
           $staff =  DB::table('Staff')->where('Id', $user->id)->first();
           if($staff->Type == 'SYSTEMADMIN'){
                //return view('index',['user'=>$user]);
           }
           else if($staff->Type == 'MONEY'){
                $donate = UserDonate::getAllRequest();
                $donateAll = Userdonate::getAll();
                return view('staff.staff_money',compact(['donate','donateAll']));
           }
           else{

                $managers = ManagerRequest::getAll();
                $allApprove = ManagerRequest::getAllApprove();
                return view('staff.staff_verify',compact(['managers','allApprove']));
           }
        }
        else{
            return view('index',['user'=>$user]);
        }
        return view('index');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}