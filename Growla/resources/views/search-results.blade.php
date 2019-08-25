@extends('template')

@section('title','Search Results')


@endsection

@section('content');
<link rel="stylesheet" href="{{ asset('css/search-results.css') }}" />

  <div class="container">
    @if (session()->has('success_message'))
      <div class="alert alert-success">
          {{ session()->('success_message') }}
      </div>
    @endif

    @if(count($errors)>0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
  </div>

  <div class="search-results-container container">
    <h1>Resultado de búsqueda</h1>
    <p class="search-results-count">{{ $beers->total() }} resultado(s) para '{{ request()->input('query') }}'</p>

    @if ($beers->total() > 0)
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Tipo</th>
          <th>Descripción</th>
          <th>IBUs</th>
          <th>Graduación Alcohólica</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($beers as $beer)
          <tr>
            <th><a href="{{ route('details', $beer->slug) }}">{{ $beer->type }}</a></th>
            <td>{{ str_limit($beer->description,80) }}</td>
            <td>{{ $beer->IBUs }}</td>
            <td>{{ $beer->alcohol_content }}</td>
          </tr>

        @endforeach
      </tbody>
    </table>

    {{ $beers->appends(request()->input())->links() }}
    @endif

  </div>

@endsection
