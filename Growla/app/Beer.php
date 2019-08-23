<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;
// use Nicolaslopez\Searchable\SearchableTrait;

class Beer extends Model
{

  // use SearchableTrait, Searchable;
  //
  // protected $fillable = ['quantity'];
  //
  //   /**
  //    * Searchable rules.
  //    *
  //    * @var array
  //    */
  //   protected $searchable = [
  //       /**
  //        * Columns and their priority in search results.
  //        * Columns with higher values are more important.
  //        * Columns with equal values have equal importance.
  //        *
  //        * @var array
  //        */
  //        'columns' => [
  //           'beers.type' => 10,
  //           'beers.description' => 2,
  //           'beers.IBUs' => 5,
  //           'beers.alcohol_content' => 5,
  //       ],
  //   ];
  //
  // protected $dates = [
  //   'created_at',
  //   'updated_at'
  // ];
  //
  //
  // public function toSearchableArray()
  // {
  //   $array = $this->toArray();
  //
  //   return array('id' => $array['id'], 'name' => $array['name']);
  // }
}
