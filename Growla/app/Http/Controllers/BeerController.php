<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;
class BeerController extends Controller
{
    public function listado(){
      $beers = Beer::all();
      $vac = compact("beers");
      return view ("beers-list", $vac);
    }

    public function detalle($id){
      $beer = Beer::find($id);
      $vac = compact("beer");
      return view("productsdetails", $vac);
    }

    public function newBeer(){
      return view ("new-beer");
    }
}
