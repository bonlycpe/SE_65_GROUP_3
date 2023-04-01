<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
class ObjectRequest extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'Amount',
        'Date',
        'userId',
        'CampaignObjectId',
        'CampaignObjectId'
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

    public static function getAll() {
        $donate = DB::table('campaign_user_donate')
        ->join('campaign','campaign_user_donate.campaign_money_id','=','campaign.Id')
        ->join('users','campaign_user_donate.user_id','=','users.Id')
        ->whereNot('campaign_user_donate.Status','=','REQUEST')
        ->select('campaign_user_donate.Id','users.name','users.surname','Amount','campaign.Name','campaign_user_donate.Status')
        ->get();    

        return $donate;
    }
}