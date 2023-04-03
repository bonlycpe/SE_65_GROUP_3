<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class ObjectCampaign extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = false;
    public $table = "campaign_object";

    protected $fillable = [
        'Tag'
    ];

    public static function getAll() {
        $campaign = DB::table('campaign_object')
        ->join('campaign','campaign_object_Id','=','campaign.Id')
        ->select('campaign_object.campaign_object_Id','campaign.Name','campaign.Description','campaign.Status','Tag','campaign.Image')
        ->get();    
        return $campaign;
    }

    public static function searchByName($name){
        $campaign = DB::table('campaign_object')
        ->join('campaign','campaign_object_Id','=','campaign.Id')
        ->where('campaign_object.Tag','like','%'.$name.'%')
        ->select('campaign_object.campaign_object_Id','campaign.Name','campaign.Description','campaign.Status','Tag','campaign.Image')
        ->get();   
        return $campaign;
    }
}