{{-- usa la plantilla de template.blade.php --}}
@extends('template')


{{--se completa la parte del @yield en el template pasandole el nombre de la pagina, en este caso, home.--}}
@section('pageTitle','Home')


@section('contenidoPrincipal')
  <div class="home">
        <img class="growla" src="\images\logonegropaint.png" alt="logo completo">
          <h1>Somos Growla, una empresa que crece sobre dos pilares fundamentales: el amor por la birra y la amistad. </h1>
      </div>
@endsection
