<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
class ProjectUser extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public $timestamps = false;
    public $table = "campaign_project_user";

    protected $fillable = [
    ];

    public static function getAllUserInCampaignByCampaignId($id) {
        $user = DB::table('campaign_project_user')
        ->where('campaign_project_user.campaign_id','=',$id)
        ->select('campaign_project_user.Id')
        ->get();    

        return $user;
    }

}