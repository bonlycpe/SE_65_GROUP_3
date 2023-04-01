<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Campaign extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'Description',
        'status'
    ];
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
        // ->leftJoin('campaign_object AS cu', 'campaign.Id', '=', 'campaign_object.Tag')
        ->select('campaign.Id','campaign.Name','campaign.Description','campaign.Status','campaign.Image','campaign_object.Tag')  

        // ->join('campaign_object','campaign.Id','=','campaign_object.campaign_object_id')
        // ->join('campaign_object','campaign_object.campaign_object_id','=','campaign_object.Tag')
        // ->join('tag_campaign_object','campaign.Id','=','tag_campaign_object.campaign_object_id')
        // ->select('campaign.Id','campaign.Name','campaign.Description','campaign.Status','campaign.Image','campaign.Tag')
        ->get();       

        return $campaignObject;
    }

    public static function active($id){
        $active = DB::table('campaign')->where('Id', $id)->update(['Status' => 'ACTIVE' ]);
    }

    public static function terminate($id){
        $terminate = DB::table('campaign')->where('Id', $id)->update(['Status' => 'TERMINATE' ]);
    }

    public static function finished($id){
        $finished = DB::table('campaign')->where('Id', $id)->update(['Status' => 'FINISHED' ]);
    }

}
