<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
                return view('homeAdmin',['user'=>$user]);
           }
           else if($staff->Type == 'MONEY'){
                return view('homeMoney',['user'=>$user]);
           }
           else{
                return view('homeVerify',['user'=>$user]);
           }
        }
        else{
            return view('home',['user'=>$user]);
        }
        
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}