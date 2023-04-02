<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class MoneyCampaign extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = false;
    public $table = "campaign_money";

    protected $fillable = [
        'Goal',
    ];

    public static function getAll() {
        $campaign = DB::table('campaign_money')
        ->join('campaign','campaign_money_id','=','campaign.Id')
        ->select('campaign_money.campaign_money_id','campaign_money.Goal','campaign.Name','campaign.Description','campaign.Status','campaign.Image as Image','campaign_money.total')
        ->get();
        return $campaign;
    }

    public static function getById($id){
        $campaign = DB::table('campaign_money')
        ->join('campaign','campaign_money_id','=','campaign.Id')
        ->where('campaign_money_id','=',$id)
        ->select('campaign_money.campaign_money_id as Id','campaign_money.Goal','campaign.Name as Name','campaign.Description','campaign.Status','campaign_money.Image as Image')
        ->first();
        return $campaign;
    }

}
