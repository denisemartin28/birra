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


//CREAR BIRRA

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
        "alcohol_content"=>"required|string|min:0"
        //"color_id"=>"numeric"
      ];
      $msj=[
        "required" => "El campo :attribute se encuentra repetido",
        "string" => "El campo :attribute debe ser un texto",
        "min" => "El campo :attribute tiene un minimo  de :min",
        "required" => "El campo :attribute debe ser obligatorio",
        "numeric" => "El campo :attribute debe ser un numero"
      ];

      $this->validate($req,$rules,$msj);

//INGRESA LOS VALORES REDACTADOS EN EL FORMULARIO

      $newBeer = new Beer();
      $newBeer->type= $req["type"];
      $newBeer->description= $req["description"];
      $newBeer->IBUs= $req["IBUs"];
      $newBeer->alcohol_content= $req["alcohol_content"];
      $newBeer->color_id= $req["color_id"];
      $newBeer->image= $req["image"];
      $newBeer->save();
      $beers = Beer::all();
      $vac = compact("beers");

      return view ("beers-list",$vac);
    }

//BORRAR BIRRA

public function delete(Request $req){
  $id = $req["id"];
  $beer = Beer::find($id);
  $beer->delete();
  return redirect('beers-list');
}

//EDITA LOS DATOS DE LA BASE

public function edit($id){
  $beer = Beer::find($id);
  $vac = compact("beer");
  return view ("beer-edit",$vac);
}

//ACTUALIZA LOS DATOS DE LA BASE

public function update(Request $req,$id){

//$data = request()->validate([
//"type"  => "required",
//"description" => "required",
//"IBUs" => "required",
//"alcohol_content" => "required"
//]);
// $beer->beers-list->update($data);
//return redirect('beers-list');
// }

$rules=[
  "type"=>"required|string|min:3|",
  // no hace falta aclarar el nombre de la col porque se llama igual
  "description"=>"required|string|min:20|",
  "IBUs"=>"required|string|min:0",
  "alcohol_content"=>"required|string|min:0"
//  "color_id"=>"|string"
];
$msj=[

  "string" => "El campo :attribute debe ser un texto",
  "min" => "El campo :attribute tiene un minimo  de :min",
  "required" => "El campo :attribute debe ser obligatorio",
  "numeric" => "El campo :attribute debe ser un numero"
];

$this->validate($req,$rules,$msj);



$beerData = request()->except(['_token','_method' ]);
Beer::where('id', '==', $id)->update($beerData);
$beer = Beer::find($id);
$vac = compact('beer');
return redirect ('beers-list/{$vac}');
}
}
