<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UserDonate;

class UserDonateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        $donate = UserDonate::getAllRequest();
        $donateAll = Userdonate::getAll();
        return view('staff.staff_money',compact(['donate','donateAll']));
    }

    function approve(Request $req){
        UserDonate::approve($req->id);
        UserDonate::addMoney($req->id,(float)$req->amount);
        return redirect('staff_money');
    }
    function deny($id){
        UserDonate::deny($id);
        return redirect('staff_money');
    }

    function eslip($id){
        $eslip = UserDonate::eslip($id);
        return view('staff.slip',compact('eslip'));
    }

}