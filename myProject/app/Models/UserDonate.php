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

    public $timestamps = false;
    public $table = "campaign_user_donate";

    protected $fillable = [
        'Name',
        'Description',
        'Status'
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

    public static function getAllApproveByCampaignId($id) {
        $donate = DB::table('campaign_user_donate')
        ->join('campaign','campaign_user_donate.campaign_money_id','=','campaign.Id')
        ->join('users','campaign_user_donate.user_id','=','users.Id')
        ->where('campaign_user_donate.Status','=','APPROVE')
        ->where('campaign_user_donate.campaign_money_id','=',$id)
        ->select('campaign_user_donate.Id','users.name','users.surname','Amount','campaign.Name')
        ->get();    

        return $donate;
    }
    
    public static function search($data){
        $subquery = DB::table('campaign_user_donate')
        ->join('campaign','campaign_user_donate.campaign_money_id','=','campaign.Id')
        ->join('users','campaign_user_donate.user_id','=','users.Id')
        ->where('campaign_user_donate.Status','!=','REQUEST')
        ->select('campaign_user_donate.Id','users.name','users.surname','Amount','campaign.Name AS cname','campaign_user_donate.Status');

        $search = DB::table(DB::raw("({$subquery->toSql()}) AS US"))    
        ->mergeBindings($subquery)
        ->select('*')
        ->orwhere('US.Id','LIKE','%'.$data.'%')
        ->orWhere('US.name','LIKE','%'.$data.'%')
        ->orWhere('US.surname','LIKE','%'.$data.'%')
        ->orWhere('US.Amount','LIKE','%'.$data.'%')
        ->orWhere('US.cname','LIKE','%'.$data.'%')
        ->orWhere('US.Status','LIKE','%'.$data.'%')
        ->get();

        return $search;
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
        ->select('campaign_user_donate.Id','users.name','users.surname','Amount','campaign.Name AS cname','campaign_user_donate.Status')
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
        ->select('campaign_user_donate.Id','users.name','users.surname','Amount','campaign.Name','campaign_user_donate.Status','campaign_user_donate.eSlip','campaign_user_donate.campaign_money_id','campaign_user_donate.Timer','campaign_user_donate.Date')
        //->first();
        ->get();  
        return $eslip;
    }
    public static function addMoney($id,$amount){
        $add = DB::table('campaign_money')
        ->where('campaign_money_id',$id)
        ->increment('total',$amount);
    }
    public static function getById($id){
        $campaign = DB::table('campaign_user_donate')
        ->join('campaign','campaign_user_donate.campaign_money_id','=','campaign.Id')
        ->join('users','campaign_user_donate.user_id','=','users.Id')
        ->where('campaign_user_donate.Id',$id)
        ->select('campaign_user_donate.Id','users.name','users.surname','Amount','campaign.Name','campaign_user_donate.Status','campaign_user_donate.eSlip')
        ->get();
        return $campaign; 
    }
    public static function setCampaignFinished($id){
        $finished = DB::table('campaign')
        ->where('Id',$id)
        ->update(['Status' => 'FINISHED']);
    }
    public static function getCampaignMoney($id){
        $money = DB::table('campaign_money')
        ->where('campaign_money_id',$id)
        ->select('campaign_money_id','Goal','total')
        ->get();
        return $money;
    }

}