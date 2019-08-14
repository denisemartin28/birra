<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cerveza extends Model
{
  public $table="beers";
  public $timestamps=false;
  public $guarded = [];
}
