<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teamwhatsapps extends Model
{
    use HasFactory;
        protected $fillable = ['job','name','number','status'];
        public function touristagents(){
          return $this->hasMany(touristagents::Class,'agent_id');
        }

}
