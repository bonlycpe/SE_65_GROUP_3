<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    function index(){
        $staff = Staff::getAllStaff();
        return view('admin.admin',compact('staff'));
    }

    function search(Request $request){
        
        $data = $request->searching;
        $staff = Staff::search($data);

        return view('admin.admin', compact('staff'));
    }
    
    function createStaffPage(){
        return view('admin.adminCreateStaff');
    }
    function createStaffFromCreatePage(Request $request){
        $staff = new Staff;

        $user = new User;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->role = "STAFF";
        $user->save();

        $saveUser = Staff::getStaffByUser($request->username, $request->email);
        // echo($saveUser->first()->toArray());
        $staff->Id = $saveUser[0]->id;
        $staff->Type = $request->type;
        $staff->save();

        return redirect()->route('admin');
    }
}
