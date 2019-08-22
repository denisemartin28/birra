<?php
$navbar=[
 "Home"=>"/",
 "Birras"=>"beers-list",
 "Agregar cerveza"=>"new-beer",
 "FAQ"=>"faq",
 "Ingresá"=>"login",
 "Registrate"=>"register",
]
?>
<nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="\images\Growla_logo_circulo_fondoblanco.png" alt="logo" class="navbar-brand">
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
                 <ul class="nav navbar-nav">

                       @foreach ($navbar as $titulo => $link)
                                     <li><a href="/{{$link}} "> {{$titulo}} </a></li>
                                 @endforeach

                 </ul>


        <div class="pull-right">
                <ul class="nav pull-right">
                  <form action="{{ route('search') }}" method="GET" class="search-form">
                    <input type="text" name="query" id="query" value="{{ request()->input('query') }}" class="search-box" placeholder="Buscar">
                  </form>

                    <li  class="dropdown"><a href="profile.php" class="dropdown-toggle" data-toggle="dropdown" id="perfil">Perfil<b class="caret"></b></a>
                        <ul style="left: -100%;" class="dropdown-menu">
                            <li><a href="profile.php"><i class="icon-cog" ></i>Ver mi perfil</a></li>
                            <li><a href="#"><i class="icon-envelope" id="help"></i>Ayuda</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="icon-off" id="logout"></i>Cerrar Sesión</a></li>
                        </ul>
                    </li>
                </ul>
          </div>
        </div>
          </div>
        </nav>
<br>
