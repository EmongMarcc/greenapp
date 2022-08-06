<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restrictions extends Model
{
    use HasFactory;
    protected $fillable = ['country_id','alpha_id'];
    public function countryblogs(){
      return $this->belongsTo(countryblogs::Class,'country_id','category');
    }

}
