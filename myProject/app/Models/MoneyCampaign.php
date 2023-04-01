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

    protected $fillable = [
        'Goal',
    ];

    public static function getAll() {
        $campaign = DB::table('campaign_money')
        ->join('campaign','campaign_money_id','=','campaign.Id')
        ->select('campaign_money.campaign_money_id','campaign_money.Goal','campaign.Name','campaign.Description','campaign.Status','campaign_money.Image as Image')
        ->get();
        return $campaign;
    }

    public

}