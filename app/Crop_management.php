<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crop_management extends Model
{
    //
    protected $table = 'crop_managements';
    protected $fillable = ['id','crop_name','season_name','process','season_manager','started_date','end_date','description','crop_image'];
}

 
