<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class countryblogs extends Model
{
    use HasFactory;
        protected $fillable = ['title','body','p_date','category','coverimage','flags','regions','status','price'];
        public function restrictions()
           {
               return $this->hasMany(restrictions::class,'country_id','category');
           }
}
