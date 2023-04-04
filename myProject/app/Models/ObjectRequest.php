<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
class ObjectRequest extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public $timestamps = false;
    public $table = "campaign_object_request";

    protected $fillable = [
        'Amount',
        'Date',
        'userId',
        'CampaignObjectId',
        'CampaignObjectId'
    ];

    public static function get($id){
        $objectRequest = DB::table('campaign_object_request')
        ->where('campaign_object_request.Id','=',$id)->first();
        return $objectRequest;
    }
    

    public static function getById($id){
        $objectRequest = DB::table('campaign_object_request')
        ->join('campaign','campaign_object_request.campaign_object_id','=','campaign.Id')
        ->join('users','campaign_object_request.user_id','=','users.Id')
        ->where('campaign_object_request.Id','=',$id)->first();
        return $objectRequest;
    }

    public static function getNotChairmaneById($id,$idPK){
        $objectRequest = DB::table('campaign_object_request')
        ->join('campaign','campaign_object_request.campaign_object_id','=','campaign.Id')
        ->join('users','campaign_object_request.user_id','=','users.Id')
        ->where('campaign_object_request.campaign_project_user_id','!=',$idPK)
        ->where('campaign_object_request.campaign_object_id','=',$id)
        ->select('campaign.Name as Name','campaign_object_request.Status','campaign_object_request.Description','users.name','users.surname','campaign_object_request.Amount','campaign_object_request.campaign_project_user_id','users.image','campaign_object_request.Id','campaign_object_request.campaign_object_id')   
        ->get();
        return $objectRequest;
    }

    public static function getAllRequestAndUser($id) {
        $donate = DB::table('campaign_object_request')
        ->join('campaign','campaign_object_request.campaign_object_id','=','campaign.Id')
        ->join('users','campaign_object_request.user_id','=','users.Id')
        ->where('campaign_object_request.user_id','=',$id)
        ->select('campaign_object_request.Id','users.name','users.surname','Amount','campaign.Name','campaign.Description','campaign_object_id')
        ->get();    

        return $donate;
    }

    public static function getAllByCampaingIdAndUser($id,$userId) {
        $donate = DB::table('campaign_object_request')
        ->join('campaign','campaign_object_request.campaign_object_id','=','campaign.Id')
        ->join('users','campaign_object_request.user_id','=','users.Id')
        ->where('campaign_object_request.campaign_object_id','=',$id)
        ->where('campaign_object_request.user_id','=',$userId)
        ->select('campaign_object_request.Id','users.name','users.surname','Amount','campaign.Name','campaign.Description','campaign_object_request.Status','campaign_object_id')
        ->get();    

        return $donate;
    }

    public static function getAllByCampaingIdAndUserId($id,$userId) {
        $donate = DB::table('campaign_object_request')
        ->join('campaign','campaign_object_request.campaign_object_id','=','campaign.Id')
        ->join('users','campaign_object_request.user_id','=','users.Id')
        ->where('campaign_object_request.campaign_object_id','=',$id)
        ->where('campaign_object_request.user_id','=',$userId)
        ->select('users.name','users.surname','Amount','campaign.Name','campaign.Description','campaign_object_request.Status','campaign_object_id')->distinct()
        ->get();    

        return $donate;
    }

    public static function getAllApproveByCampaignId($id) {
        $donate = DB::table('campaign_object_request')
        ->join('campaign','campaign_object_request.campaign_object_id','=','campaign.Id')
        ->join('campaign_project_user','campaign_object_request.campaign_project_user_id','=','campaign_project_user.Id')
        ->join('users','campaign_object_request.user_id','=','users.Id')
        ->where('campaign_project_user.Role','=',"CHAIRMAN")
        ->where('campaign_object_request.campaign_object_id','=',$id)
        ->where('campaign_object_request.Status','=',"APPROVE")
        ->select('campaign_object_request.Date','users.name','users.surname','Amount','campaign.Name','campaign_object_id')
        ->get();

        return $donate;
    }

    public static function getAllByCampaignId($id) {
        $user = Auth::user();

        $donate = DB::table('campaign_object_request')
        ->join('campaign_project_user','campaign_object_request.campaign_project_user_id','=','campaign_project_user.Id')
        ->join('campaign','campaign_object_request.campaign_object_id','=','campaign.Id')
        ->join('users','campaign_object_request.user_id','=','users.Id')
        ->where('campaign_object_request.campaign_project_user_id','=',75)
        ->select('campaign_object_request.Date','users.name','users.surname','Amount','campaign.Name','campaign_object_id')
        ->get();    
        return $donate;
    }

    public static function getAllRequestByCampaignId($id) {
        $user = Auth::user();

        $PK = DB::table('campaign_project_user')
        ->where('campaign_id','=',$id)
        ->where('user_Id','=',$user->id)
        ->first();   
        $donate = DB::table('campaign_object_request')
        ->join('campaign_project_user','campaign_object_request.campaign_project_user_id','=','campaign_project_user.Id')
        ->join('campaign','campaign_object_request.campaign_object_id','=','campaign.Id')
        ->join('users','campaign_object_request.user_id','=','users.Id')
        ->where('campaign_object_request.campaign_project_user_id','=',$PK->Id)
        ->select('campaign_object_request.Id','campaign_object_request.Date','users.name','users.surname','Amount','campaign.Name','campaign_object_id','campaign_object_request.Status')
            ->get();
        return $donate;
    }

}