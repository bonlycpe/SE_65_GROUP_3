<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\UserDonate;
use App\Models\ObjectRequest;

class ProfileController extends Controller
{
    function index()
    {
        $user = Auth::user();
        $userDonate = UserDonate::getAllRequestAndUser($user->id);
        $userObject = ObjectRequest::getAllRequestAndUser($user->id);
        return view('profile.index',compact(['user','userDonate','userObject']));
    }

    function editProfile(){
        $user = Auth::user();
        return view('profile.edit',compact(['user']));
    }

    function update(Request $request){
        $user = Auth::user();
        DB::table('users')->where('id',$user->id)->update(['name'=>$request->name,'surname'=>$request->surname]);
        return redirect('/profile');
    }

    function statusDonate($id){
        $user = Auth::user();
        $statusDonate = UserDonate::getAllByCampaingIdAndUser($id,$user->id);
        return view('profile.statusDonate',compact(['user','statusDonate']));
    }

    function statusObject($id){
        $user = Auth::user();
        $statusObject = ObjectRequest::getAllByCampaingIdAndUser($id,$user->id);
        return view('profile.statusObject',compact(['user','statusObject']));
    }

}