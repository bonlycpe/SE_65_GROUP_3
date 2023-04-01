<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Staff extends Model
{
    use HasFactory;

    public static function getAllStaffVerify(){
        $staffVerify = DB::table('staff')
                ->join('users','staff.Id','=','users.Id')
                ->get();

        
    }
}
