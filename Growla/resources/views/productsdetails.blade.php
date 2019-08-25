{{-- usa la plantilla de template.blade.php --}}
@extends('template')


{{--se completa la parte del @yield en el template pasandole el nombre de la pagina, en este caso, home.--}}
@section('pageTitle','Detalles')


@section('contenidoPrincipal')


  <div class="container">
    <section class="container">

      <article class="container" id="1">
        <img class="img-thumbnail col-md-5" alt="Responsive image" src="/storage/beers/{{$beer->images}}" alt="cerveza blonde-ale">
        <div class="col-md-6">
          <h3>{{$beer->type}}</h3>
            <p>{{$beer->description}}<br><br>
              CARACTERISTICAS:
              <ul>
                <li><i>Alcohol – {{$beer->alcohol_content}} %.</i></li>
                <li><i>Amargor – {{$beer->IBUs}} IBUs.</i></li><br>
                <i class="fas fa-beer"> 500cc.</i><br>
                <i class="fas fa-beer"> 1lt.</i>
              </ul>
            </p>
        </div>
        <div >
                 <form class="" action="/deleteBeer" method="post">
                  {{csrf_field()}}
                  <input type="hidden" name="id" value="{{$beer->id}}">
                  <input type="submit" name="" value="Borrar birra">
                </form>
                <a href="/beer-edit/{{$beer->id}}">Editar</a>
        </div>
      </article>
              </ul>
            </p>
        </div>
      </article>
    </section>
      </div>
@endsection
