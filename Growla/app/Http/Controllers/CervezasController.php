<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cerveza;
class CervezasController extends Controller
{
    public function listado(){
      $cervezas = Cerveza::all();
      $vac = compact("cervezas");
      return view ("listadoCervezas", $vac);
    }

    public function detalle($id){
      $cerveza = Cerveza::find($id);
      $vac = compact("cerveza");
      return view("productsdetails", $vac);
    }

    public function nuevaCerveza(){
      return view ("nueva-cerveza");
    }
}
