<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tourpackages extends Model
{
    use HasFactory;
    protected $fillable = ['title','tour_img','keywords','description','tourpack','countryId','datestart','dateend','status'];
    public function tourpackagents(){
      return $this->hasMany(tourpackagents::Class,'tourpack','tour_id');
    }
}
