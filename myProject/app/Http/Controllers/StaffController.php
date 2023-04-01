<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
class StaffController extends Controller
{
    function index(){
        $staff = Staff::getAllStaff();
        return view('admin.admin',compact('staff'));
    }

    function search(Request $request){
        $data = $request->input('searching');
        $staff = Staff::search($data);
        return view('admin.admin', compact('staff'));
    }
}
