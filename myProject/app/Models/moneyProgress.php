<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
class moneyProgress extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public $timestamps = false;
    public $table = "progress";
}