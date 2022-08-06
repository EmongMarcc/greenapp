<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class searchengines extends Model
{
    use HasFactory;
      protected $fillable = ['title','site_name','url','description','keywords','countryId'];
}
