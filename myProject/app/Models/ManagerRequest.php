<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ManagerRequest extends Model
{
    use HasFactory;

    public $timestamps = false;
    
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
                ->select('Id','name','surname','email','username')
                ->get();
        return $managers;
    }

    public static function getAllApprove(){
        $managers = DB::table('users')
                ->where('permission','=','APPROVE')
                ->select('Id','name','surname','email','username')
                ->get();
        return $managers;
    }
    public static function search($data){
        $subquery = DB::table('users')
                ->where('permission','=','APPROVE')
                ->select('Id','name','surname','email','username');
        
        $search = DB::table(DB::raw("({$subquery->toSql()}) AS US"))    
                ->mergeBindings($subquery)
                ->select('*')
                ->orwhere('US.Id','LIKE','%'.$data.'%')
                ->orWhere('US.name','LIKE','%'.$data.'%')
                ->orWhere('US.surname','LIKE','%'.$data.'%')
                ->orWhere('US.email','LIKE','%'.$data.'%')
                ->orWhere('US.username','LIKE','%'.$data.'%')
                ->get();
        return $search;
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
                ->select('Id','name','surname','email','username','citizen_id','phone','address','permission')
                ->get();
        return $info;
    }
}