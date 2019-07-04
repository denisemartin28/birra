<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\stylesheet.css">
    <title></title>
  </head>
  <body>
  <div class="containerheader">
    <div class="jumbotron">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
          <div class="item active">
              <img src=img\descarga.jpg alt="">
          </div>
          <div class="item">
              <img src=img\imagen3.jpg alt="">
          </div>
      </div>
    </div>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="img\Growla_logo_circulo_fondoblanco.png" alt="logo" class="navbar-brand">
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <?php if ($_SESSION['usuario']): ?>
                       <li class="lista"><a href="home.php"> Home </a></li>
                       <li class="lista"><a href="list-products"> Birras </a></li>
                       <li class="lista"><a href="faq.php"> FAQ </a></li>
                     <?php endif; ?>
                     <?php if (!$_SESSION["usuario"]): ?>
                        <li class="lista"><a href="home.php"> Home </a></li>
                        <li class="lista"><a href="list-products.php"> Birras </a></li>
                         <li class="lista"><a href="faq.php"> FAQ </a></li>
                        <li class="lista"><a href="login.php"> Ingresá </a></li>
                                       <li><a href="register.php"> Registrate </a></li>
                     <?php endif; ?>
          </ul>
          <div class="pull-right">
                <ul class="nav pull-right">
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
        </div><br>
      </header>
    </div>

  </div>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</html>
