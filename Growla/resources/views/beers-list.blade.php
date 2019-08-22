
{{-- usa la plantilla de template.blade.php --}}
@extends('template')


{{--se completa la parte del @yield en el template pasandole el nombre de la pagina, en este caso, home.--}}
@section('pageTitle','Nuestras birras')


@section('contenidoPrincipal')
  <div class="container">
  <div class="row">
    @foreach ($beers as $beer)
    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 col-xl-4">
      <div class="panel panel-default text-center mt-3" >
        <div class="panel-heading panel-title">{{$beer->type}}</div>
        <div class="panel-body"><img src="/storage/beers/{{$beer->images}}" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a class="more" class="stretched-link" href="/detalle/{{$beer->id}}">Ver más</a></div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
