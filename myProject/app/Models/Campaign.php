<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Campaign extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'Name',
        'Description',
        'Status'
    ];

    public static function getById($id){
        $managers = DB::table('campaign')
                ->where('Id','=',$id)
                ->first();
        return $managers;
    }

    

}