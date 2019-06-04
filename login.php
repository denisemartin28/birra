
<html lang="en" dir="ltr">
  <head>
<link rel="stylesheet" href="login.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>
  </head>
  <body>
<header>


<?php require_once "header.php" ?>
</header>
<div class="container-principal">



<div class="container-login">
<div class="container-imagen">

<img src="img/logonegropaint.png" alt="">
</div>
<div class="container-usuario">
<form class="" action="index.html" method="post">
  <label for="">Usuario</label> <br>
  <input type="email" placeholder="Ingresar email" name="usuario" value="">
</form>
</div>

<div class="container-contraseña">
<form class="" action="index.html" method="post">
  <label for="">Contraseña</label> <br>
  <input type="password" placeholder="Ingresar contraseña" name="contraseña" value="">
</form>
</div>

<div class="container-boton">
<form class="" action="index.html" method="post">
<input class="boton" type="submit" name="" value="Login">
</form>
</div>

<div class="container-olvidaste">
<a href="#">Olvidaste tu contraseña? Dame click</a>
</div>

</div>

</div>
<br>
<br>
<?php require_once "../birra-master/footer.php" ?>

  </body>
</html>
