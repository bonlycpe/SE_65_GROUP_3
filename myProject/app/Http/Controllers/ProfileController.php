<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\UserDonate;

class ProfileController extends Controller
{
    function index()
    {
        $user = Auth::user();
        $userDonate = UserDonate::getAllRequestAndUser($user->id);
        return view('profile.index',compact(['user','userDonate']));
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

}