
{{-- usa la plantilla de template.blade.php --}}
@extends('template')


{{--se completa la parte del @yield en el template pasandole el nombre de la pagina, en este caso, home.--}}
@section('pageTitle','Nuestras birras')


@section('contenidoPrincipal')
  <div class="container">
  <div class="row">
    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
      <div class="panel panel-default text-center mt-3" >
        <div class="panel-heading panel-title">BLONDE</div>
				<!-- La idea de las imágenes es poder ir a sacar fotos a la fábrica, para que sean originales. Por el momento por no haber podido ir agregamos fotos de internet. -->
        <div class="panel-body"><img src="\images\blonde2.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a class="more" class="stretched-link" href="/detalle/1">Ver más</a></div>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
      <div class="panel panel-default text-center mt-3">
        <div class="panel-heading panel-title">IPA</div>
        <div class="panel-body"><img src="\images\ipa2.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer" class="footer"><a class="more stretched-link" href="/detalle/2">Ver más</a></div>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
      <div class="panel panel-default text-center mt-3">
        <div class="panel-heading panel-title">SESSION IPA</div>
        <div class="panel-body"><img src="\images\sessionipa2.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a class="more stretched-link" href="detalle/3">Ver más</a></div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">
  <div class="row">
    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
      <div class="panel panel-default text-center mt-3">
        <div class="panel-heading panel-title">OKTOBERFEST</div>
        <div class="panel-body"><img src="\images\oktoberfest2.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a class="more stretched-link" href="detalle/4">Ver más</a></div>
      </div>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
      <div class="panel panel-default text-center mt-3">
        <div class="panel-heading panel-title">PORTER</div>
        <div class="panel-body"><img src="\images\porter2.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a class="more stretched-link" href="detalle/5">Ver más</a></div>
      </div>
    </div>
@endsection
