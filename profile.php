<!doctype html>
<html>
<head>
  <title>Perfil</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/css-profile.css">
</head>

<body>
  <?php require_once "header.php" ?>
  <div class="container" style="align-items: center;">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6">
            <div class="well well-sm" id="well">
                <div class="row" id="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="img/avatar.jpg"  alt="imagen de usuario" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                            Pepito Perez</h4>

                        <small>Birra fan lvl 9000 <i class="fas fa-beer"></i></small>
                      <br />
                        <p>
                        </br>
                            <i class="fas fa-envelope-open"></i> pepitoelmejor@gmail.com
                            <br />
                            <i class="fab fa-facebook"></i> Pepito Perez
                            <br />
                            <i class="fab fa-instagram"></i> pepitoamalabirraok</p>

                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">
                                Editar</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Social</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="">Configuración</a></li>
                                <li class="divider"></li>
                                <li><a href="">Cerrar Sesión</a></li>
                           </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "footer.php" ?>
</body>
</html>
