<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Campaign extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = "campaign";
    
    protected $fillable = [
        
    ];

    public static function getById($id){
        $campaign = DB::table('campaign')
                ->where('Id','=',$id)
                ->first();
        return $campaign;
    }

    public static function getByName($name){
        $campaign = DB::table('campaign')
                ->where('Name','=',$name)
                ->first();
        return $campaign;
    }

    public static function getAll(){
        $campaign = DB::select('select * from campaign');

        return $campaign;
    }

    public static function getMoney(){
        $campaignMoney = DB::table('campaign')
        ->join('campaign_money','campaign.Id','=','campaign_money.campaign_money_id')
        ->select('campaign.Id','campaign_money.Goal','campaign.Name','campaign.Description','campaign.Status','campaign.Image','campaign_money.campaign_money_id')->get();       
        return $campaignMoney;
    }

    public static function getObject(){
        $campaignObject = DB::table('campaign')
        ->Join('campaign_object', 'campaign.Id', '=', 'campaign_object.campaign_object_id')
        ->leftJoin('campaign_object as cu', 'campaign.Id', '=', 'campaign_object.Tag')
        ->select('campaign.Id','campaign.Name','campaign.Description','campaign.Status','campaign.Image','cu.Tag')
        ->get();       

        return $campaignObject;
    }

}