{{-- usa la plantilla de template.blade.php --}}
@extends('template')


{{--se completa la parte del @yield en el template pasandole el nombre de la pagina, en este caso, home.--}}
@section('pageTitle','Nuestras birras')
@section('contenidoPrincipal')
<ul class="alert danger">
  <?php foreach ($errors ->all() as $error): ?>
    <li>
      {{$error}}
    </li>
  <?php endforeach; ?>
</ul>
<form class="" action="/new-beer" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  <label for="">Tipo de cerveza</label>
  <br>
 <input type="text" name="type" value="">
 <br>
 <label for="">Descripcion</label>
 <br>
 <textarea name="description" rows="8" cols="21"></textarea>
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
  @<?php foreach ($colors as $color): ?>
  <option value="{{$color->id}}">{{$color->color}}</option>
  <?php endforeach; ?>
  </select>
  <br>
  <label for="">Insertá una imagen</label>
  <br>
  <input type="file" name="image" value="">
  <br>
<input type="submit" name="" value="Enviar">

</form>
@endsection
