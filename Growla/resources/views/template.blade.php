<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('pageTitle') - Growla birra </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="/css/stylesheet.css">
  <link rel="stylesheet" href="/css/list-products.css">
  <link rel="articles" href="/css/articles.css">
</head>
  <body>

    <form action="/logout" method="post">
      @csrf
      <button type="submit" name="button">CERRAR SESION</button>
    </form>
@include('partials.header')

{{-- incluye el archivo navbar dentro de la carpeta partials --}}
@include('partials.navbar')

@yield('contenidoPrincipal')

{{-- incluye el archivo footer dentro de la carpeta partials --}}
@include('partials.footer')
  </body>
</html>
