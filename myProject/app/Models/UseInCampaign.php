<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class UseInCampaign extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = false;
    public $table = "campaign_project_user";

    public static function getByUserId($id){
        $myCampaign = DB::table('campaign_project_user')
        ->where('user_id','=',$id)
        ->select('campaign_project_user.campaign_id as campaign_id','campaign_project_user.Role as Role')
        ->first();
        return $myCampaign;
    }

    public static function getAllMoneyByUserId($id){
        $myCampaign = DB::table('campaign_project_user')
        ->join('campaign','campaign_project_user.campaign_id','=','campaign.Id')
        ->join('campaign_money','campaign_project_user.campaign_id','=','campaign_money.campaign_money_id')
        ->where('user_id','=',$id)
        ->select('campaign_money.campaign_money_id','campaign_money.Goal','campaign.Name','campaign.Description','campaign.Status','campaign.Image as Image','campaign_money.total')
        ->get();
        return $myCampaign;
    }

    public static function getAllObjectByUserId($id){
        $myCampaign = DB::table('campaign_project_user')
        ->join('campaign','campaign_project_user.campaign_id','=','campaign.Id')
        ->join('campaign_object','campaign_project_user.campaign_id','=','campaign_object.campaign_object_id')
        ->where('user_id','=',$id)
        ->select('campaign_object.campaign_object_Id','campaign.Name','campaign.Description','campaign.Status','Tag','campaign.Image')
        ->get();
        return $myCampaign;
    }

    
    

}