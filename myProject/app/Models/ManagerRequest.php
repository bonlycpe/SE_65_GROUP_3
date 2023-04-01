<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ManagerRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'firstname',
        'lastname',
        'email_adress',
        'username'
    ];
    public static function getAll(){
        $managers = DB::table('users')
                ->where('permission','=','REQUEST')
                ->select('Id','name','surname','email','username','citizen_id','phone','address')
                ->get();
        return $managers;
    }

    public static function getAllApprove(){
        $managers = DB::table('users')
                ->where('permission','=','APPROVE')
                ->select('Id','name','surname','email','username','citizen_id','phone','address')
                ->get();
        return $managers;
    }


    public static function approve($id){
        $approve = DB::table('users')
                ->where('Id', $id)
                ->update(['permission' => 'APPROVE' ]);
    }

    public static function deny($id){
        $deny = DB::table('users')
                ->where('Id', $id)
                ->update(['permission' => 'NULL' ]);
    }
    public static function info($id){
        $info = DB::table('users')
                ->where('Id', $id)
                ->select('name','surname','email','username','citizen_id','phone','address')
                ->get();
        return $info;
    }
}
