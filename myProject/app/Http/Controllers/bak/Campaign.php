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
        ->select('campaign.Id','campaign_money.Goal','campaign_money.total','campaign.Name','campaign.Description','campaign.Status','campaign.Image','campaign_money.campaign_money_id')->get();       
        return $campaignMoney;
    }

    public static function getObject(){
        $campaignObject = DB::table('campaign')
        ->Join('campaign_object', 'campaign.Id', '=', 'campaign_object.campaign_object_id')
        ->select('campaign.Id','campaign.Name','campaign.Description','campaign.Status','campaign.Image','campaign_object.Tag') 
        ->get();       

        return $campaignObject;
    }

    //     public static function update($Id,$Name,$Description,$Image){
    //     if($image==NULL){
    //         DB::table('campaign')->where('Id',$Id)->update(['Name'=>$Name,'Description'=>$Description]);
    //     }else{
    //         DB::table('campaign')->where('Id',$Id)->update(['Name'=>$Name,'Description'=>$Description, 'Image'=>$Image]);
    //     }

    // }

    public static function terminateRequest($Id,$Terminate_Description){
        DB::table('campaign')->where('Id',$Id)->update(['Status'=>'REQUEST_TERMINATE','Terminate_Description'=>$Terminate_Description]);
        return True;
    }



}
