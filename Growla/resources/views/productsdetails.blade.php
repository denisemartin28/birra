{{-- usa la plantilla de template.blade.php --}}
@extends('template')


{{--se completa la parte del @yield en el template pasandole el nombre de la pagina, en este caso, home.--}}
@section('pageTitle','Detalles')


@section('contenidoPrincipal')


  <div class="container">
    <section class="container">

      <article class="container" id="1">
        <img class="img-thumbnail col-md-5" alt="Responsive image" src="/storage/beers/{{$cerveza->images}}" alt="cerveza blonde-ale">
        <div class="col-md-6">
          <h3>{{$cerveza->type}}</h3>
            <p>{{$cerveza->description}}<br><br>
              CARACTERISTICAS:
              <ul>
                <li><i>Alcohol – {{$cerveza->alcohol_content}} %.</i></li>
                <li><i>Amargor – {{$cerveza->IBUs}} IBUs.</i></li><br>
                <i class="fas fa-beer"> 500cc.</i><br>
                <i class="fas fa-beer"> 1lt.</i>
              </ul>
            </p>
        </div>
      </article>
              </ul>
            </p>
        </div>
      </article>
    </section>
      </div>
@endsection
