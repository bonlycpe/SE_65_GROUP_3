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

}