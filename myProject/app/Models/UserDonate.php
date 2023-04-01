<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
class UserDonate extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'firstname',
        'lastname',
        'campaign_name',
        'amount'
    ];
    

    public static function getAllRequest() {
        $donate = DB::table('campaign_user_donate')
        ->join('campaign','campaign_user_donate.campaign_money_id','=','campaign.Id')
        ->join('users','campaign_user_donate.user_id','=','users.Id')
        ->where('campaign_user_donate.Status','=','REQUEST')
        ->select('campaign_user_donate.Id','users.name','users.surname','Amount','campaign.Name')
        ->get();    

        return $donate;
    }

    public static function getAllRequestAndUser($id) {
        $donate = DB::table('campaign_user_donate')
        ->join('campaign','campaign_user_donate.campaign_money_id','=','campaign.Id')
        ->join('users','campaign_user_donate.user_id','=','users.Id')
        ->where('campaign_user_donate.user_id','=',$id)
        ->select('campaign_user_donate.Id','users.name','users.surname','Amount','campaign.Name','campaign.Description','campaign_user_donate.Status','campaign_money_id')
        ->get();    

        return $donate;
    }

    public static function getAllByCampaingIdAndUser($id,$userId) {
        $donate = DB::table('campaign_user_donate')
        ->join('campaign','campaign_user_donate.campaign_money_id','=','campaign.Id')
        ->join('users','campaign_user_donate.user_id','=','users.Id')
        ->where('campaign_user_donate.campaign_money_id','=',$id)
        ->where('campaign_user_donate.user_id','=',$userId)
        ->select('campaign_user_donate.Id','users.name','users.surname','Amount','campaign.Name','campaign.Description','campaign_user_donate.Status','campaign_money_id')
        ->get();    

        return $donate;
    }

    public static function getAll() {
        $donate = DB::table('campaign_user_donate')
        ->join('campaign','campaign_user_donate.campaign_money_id','=','campaign.Id')
        ->join('users','campaign_user_donate.user_id','=','users.Id')
        ->whereNot('campaign_user_donate.Status','=','REQUEST')
        ->select('campaign_user_donate.Id','users.name','users.surname','Amount','campaign.Name','campaign_user_donate.Status')
        ->get();    

        return $donate;
    }

    public static function approve($id){
        $approve = DB::table('campaign_user_donate')
                ->where('Id', $id)
                ->update(['Status' => 'APPROVE']);
    }
    public static function deny($id){
        $deny = DB::table('campaign_user_donate')
                ->where('Id', $id)
                ->update(['Status' => 'DENY']);
    }
    public static function eslip($id){
        $eslip = DB::table('campaign_user_donate')
        ->join('campaign','campaign_user_donate.campaign_money_id','=','campaign.Id')
        ->join('users','campaign_user_donate.user_id','=','users.Id')
        ->where('campaign_user_donate.Id',$id)
        ->select('campaign_user_donate.Id','users.name','users.surname','Amount','campaign.Name','campaign_user_donate.Status','campaign_user_donate.eslip')
        ->get();  
        return $eslip;
    }
}