<!DOCTYPE html>
<?php
$navbar=[
  "Home"=>"home.php",
  "Birras"=>"list-products.php",
  "FAQ"=>"faq.php",
  "Ingresá"=>"login.php",
  "Registrate"=>"register.php",
]
 ?>
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
          <ul class="nav navbar-nav">
                <?php foreach ($navbar as $titulo => $link) : ?>
      						<li><a href="<?php echo $link; ?>"> <?php echo $titulo; ?> </a></li>
      					<?php endforeach; ?>
          </ul>
          <ul class="nav navbar-nav navbar-right">
                <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>

          </ul>
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
