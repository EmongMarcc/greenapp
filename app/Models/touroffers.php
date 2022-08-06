<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class touroffers extends Model
{
    use HasFactory;
    protected $casts = [
      'json_include' => 'array',
    ];
      protected $fillable = ['title','tour_img','keywords','description','json_include','offer_sitelink','datepublish','datestart','dateend','status','countryId'];
}
