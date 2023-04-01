<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class RequestPermissionController extends Controller
{
    function index()
    {
        $user = Auth::user();
        return view('requestVerify',['user'=>$user]);
    }

    public function update(Request $request){
        $user = Auth::user();
        DB::table('users')->where('id',$user->id)->update(['citizen_id'=>$request->citizenId,'phone'=>$request->phone,'address'=>$request->address,'permission'=>'REQUEST']);
        return redirect('home');
    }
}
