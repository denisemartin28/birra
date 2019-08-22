{{-- usa la plantilla de template.blade.php --}}
@extends('template')


{{--se completa la parte del @yield en el template pasandole el nombre de la pagina, en este caso, home.--}}
@section('pageTitle','Nuestras birras')
@section('contenidoPrincipal')
<form class="" action="/new-beer" method="post">
  <label for="">Tipo de cerveza</label>
  <br>
 <input type="text" name="type" value="">
 <br>
 <label for="">Descripcion</label>
 <br>
 <input type="text" name="description" value="">
 <br>
 <label for="">IBU</label>
 <br>
<input type="number" name="IBUs" value="">
<br>
<label for="">Porcentaje de Alcohol</label>
<br>
<input type="number" name="alcohol_content" value="Ej:7.8">
<br>
<label for="">Color</label>
<br>
<select class="" name="color_id">
  <br>
  <option value="">Elegí un color</option>
  </select>
  <label for="">Insertá una imagen</label>
  <br>
  <input type="file" name="image" value="">
  <br>
<input type="submit" name="" value="Enviar">

</form>
@endsection
