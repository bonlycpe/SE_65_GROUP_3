<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class Staff extends Model
{
    use HasFactory;
    public $timestamps = false;

    public static function getAllStaffVerify(){
        $staffVerify = DB::table('staff')
                ->join('users','staff.Id','=','users.Id')
                ->where('staff.Type','=','VERIFY')
                ->get();
        return $staffVerify;
        
    }
    public static function getAllStaffMoney(){
        $staffMoney = DB::table('staff')
                ->join('users','staff.Id','=','users.Id')
                ->where('staff.Type','=','MONEY')
                ->get();
        return $staffMoney;
        
    }
    public static function getAllStaff(){
        $staff = DB::table('users')
            ->join('staff','staff.Id','=','users.Id')
            ->where('users.role','=','STAFF')
            ->where('staff.Type','!=','SYSTEMADMIN')
            ->get();
        return $staff;
    }
    public static function search($data){
        $subquery = DB::table('staff')
        ->select('users.name', 'users.username', 'users.surname', 'users.email', 'users.role', 'staff.Type','users.id')
        ->join('users', 'staff.Id', '=', 'users.id')
        ->where('staff.Type', '!=', 'SYSTEMADMIN');

        $search = DB::table(DB::raw("({$subquery->toSql()}) AS US"))
        ->mergeBindings($subquery)
        ->select('*')
        ->orwhere('US.name','LIKE','%'.$data.'%')
        ->orWhere('US.surname','LIKE','%'.$data.'%')
        ->orWhere('US.email','LIKE','%'.$data.'%')
        ->orWhere('US.username','LIKE','%'.$data.'%')
        ->orWhere('US.Type','LIKE','%'.$data.'%')
        ->get();
        return $search;
    }
    public static function getStaffByUser($username, $email){
        $staff = DB::table('users')
        ->select('users.id')
        ->where('users.username', '=', $username)
        ->where('users.email', '=', $email)
        ->get()->toArray();
        return $staff;
    }
}
