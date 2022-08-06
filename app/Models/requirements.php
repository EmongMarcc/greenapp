<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requirements extends Model
{
    use HasFactory;
    protected $fillable = ['reqtype','reqbody','category_id','status'];
}
