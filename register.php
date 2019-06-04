<html lang="en" dir="ltr">
  <head>
<link rel="stylesheet" href="registro.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
  </head>
  <body>
<?php require_once "header.php" ?>
<div class="container-imagen">
  <img src="img/logonegropaint.png" alt="">
</div>

<form class="login" action="index.html" method="post">
<div class="container">

<div class="container-login">

<div class="ingresar-datos">
      <label  for="">Nombre </label> <br>
      <input class="casillero" placeholder="Introduzca su nombre"  type="text" id="email" name="email" value="">
</div>


<div class="ingresar-datos">
    <label style= for="">Apellido </label> <br>
    <input class="casillero" placeholder="Introduzca su apellido"  type="text" id="contraseña" name="contraseña" value="">
</div>

<div class="ingresar-datos">
    <label style= for="">E-mail </label> <br>
    <input class="casillero" placeholder="Introduzca su e-mail"  type="email" id="contraseña" name="contraseña" value="">
</div>

<div class="ingresar-datos">
    <label style= for="">Repetir e-mail </label> <br>
    <input class="casillero" placeholder="Repita su e-mail"  type="email" id="contraseña" name="contraseña" value="">
</div>

<div class="ingresar-datos">
    <label style= for=""> Contraseña </label> <br>
    <input class="casillero" placeholder="Introduzca contraseña"  type="password" id="contraseña" name="contraseña" value="">
</div>
<div class="ingresar-datos">
    <label style= for="">Repetir contraseña </label> <br>
    <input class="casillero" placeholder="Repita la contraseña"  type="password" id="contraseña" name="contraseña" value="">
</div>
<br>
<div  class="container-boton">
   <input class="boton" type="submit" name="" id="boton" value="REGISTRARSE">
</div>

</div>

</div>

</form>

<?php require_once "../birra-master/footer.php" ?>
  </body>
</html>
