<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
class Progress extends Model
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

    public static function getAllByCampaignId($id) {
        $donate = DB::table('progress')
        ->join('campaign','progress.campaign_money_id','=','campaign.Id')
        ->where('progress.campaign_money_id','=',$id)
        ->select('progress.Name as progressName','progress.Timer','progress.Description','progress.Date','campaign.Name','progress.Image')
        ->orderBy('progress.Date', 'desc')
        ->get();    
        return $donate;
    }
}