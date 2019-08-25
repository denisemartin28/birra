@extends('template')


{{--se completa la parte del @yield en el template pasandole el nombre de la pagina, en este caso, home.--}}
@section('pageTitle','Editor')


@section('contenidoPrincipal')
  <form class="" action="{{url('/beers-list/'.$beer->id)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('PATCH')}}
    <label for="">Tipo de cerveza</label>
    <br>
   <input type="text" name="type" value="{{$beer->type}}">
   <br>
   <label for="">Descripcion</label>
   <br>
   <textarea name="description" rows="8" cols="21"  >{{$beer->description}}</textarea>
   <br>
   <label for="">IBU</label>
   <br>
  <input type="number" name="IBUs" value="{{$beer->IBUs}}">
  <br>
  <label for="">Porcentaje de Alcohol</label>
  <br>
  <input type="number" name="alcohol_content" value="{{$beer->alcohol_content}}">
  <br>

{{--aca va la opcion de COLORS--}}

    <br>
    <label for="">Insertá una imagen</label>
    <br>
    <input type="file" name="image" value="">
    <br>
  <input type="submit" name="" value="Actualizar">

  </form>
@endsection
