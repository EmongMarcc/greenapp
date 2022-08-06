<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\requirements;


class visareq extends Controller
{
  public function addPost($id){
  requirements::create([
    'category_id' => $id,
    'reqtype' => request('reqtype'),
    'reqbody' => request('reqbody')
  ]);
  return redirect('/dash/countrylists/'.$id)->with('upload','Blog Added Successful!');
  }
}
