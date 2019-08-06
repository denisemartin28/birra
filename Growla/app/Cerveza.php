<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cerveza extends Model
{
  public $table="beers";
//  public $primaryKey="id";
//  public $timestamps=false;
  public $guarded = [];
}
