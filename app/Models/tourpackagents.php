<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tourpackagents extends Model
{
    use HasFactory;
    protected $fillable = ['tour_id','agent_id'];
    public function teamwhatsapps(){
      return $this->hasMany(teamwhatsapps::Class,'agent_id');
    }
}
