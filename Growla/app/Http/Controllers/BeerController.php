<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;
use App\Color;
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

    public function createBeer(){
      $colors=Color::all();
      $vac = compact("colors");
      return view ("new-beer",$vac);
    }
    public function newBeer(Request $req){
      $rules=[
        "type"=>"required|string|min:3|unique:beers",
        // no hace falta aclarar el nombre de la col porque se llama igual
        "description"=>"required|string|min:20|unique:beers",
        "IBUs"=>"required|string|min:0",
        "alcohol_content"=>"required|string|min:0",
        "color_id"=>"required|string"
      ];
      $msj=[
        "type.required" => "";
        "type.min" => "";
      ];

      $this->validate($req,$rules,$msj);

      $newBeer = new Beer();
      $newBeer->type= $req["type"];
      $newBeer->description= $req["description"];
      $newBeer->IBUs= $req["IBUs"];
      $newBeer->alcohol_content= $req["alcohol_content"];
      $newBeer->color_id= $req["color_id"];
      $newBeer->image= $req["image"];
      $newBeer->save();

      return view ("beers-list");
    }
}
