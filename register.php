<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/registro.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>Registro</title>
  </head>

  <body>
    <?php require_once "header.php" ?>


    <?php
//ACA ESTAMOS EN GET
    include 'funciones.php';
//DECLARO LAS VARIABLES VACIAS PARA LUEGO INGRESARLES EL NOMBRE POR POST.
    $nombreOk = "";
    $apellidoOk= "";
    $emailOk= "";
    if ($_POST) {

// ACA EMPIEZA EL POST

      $errores = validarRegistro($_POST);
      //EMPIEZA EL ENVIO POR POST
      $nombreOk = trim($_POST["nombre"]);
      $apellidoOk = trim($_POST["apellido"]);
      $emailOk = trim($_POST["email"]);


    if (!$errores) {
      //SI NO HAY ERRORES...
      $usuario = armarUsuario();
    //  var_dump($usuario);

      guardarUsuario($usuario);
      exit;
    }

   }
     ?>

    <div class="container-imagen">
      <img src="img/logonegropaint.png" alt="">
    </div>

<!-- Falta PAIS DE NACIMIENTO E IMAGEN DE PERFIL -->

    <form class="login" action="register.php" method="post" enctype="multipart/form-data">
      <div class="container">
        <div class="container-login">
          <div class="ingresar-datos">
            <label  for="">Nombre </label> <br>
              <?php  if (isset($errores["nombre"])): ?>
<input class="casillero" placeholder="Introduzca su nombre"  type="text"  name="nombre" value="">
                  <?= $errores["nombre"] ?>
                <?php else: ?>
                <input class="casillero" placeholder="Introduzca su nombre"  type="text" name="nombre"  value=" <?= $nombreOk ?>">
              <?php endif ?>



          </div>


          <div class="ingresar-datos">
            <label for="">Apellido </label> <br>
            <?php if (isset($errores["apellido"])): ?>
            <input class="casillero" placeholder="Introduzca su apellido"  type="text" name="apellido"  value="">
              <?= $errores["apellido"] ?>
            <?php else: ?>
              <input class="casillero" placeholder="Introduzca su apellido"  type="text" name="apellido"  value="<?= $apellidoOk ?>">
            <?php endif ?>
          </div>

          <div class="ingresar-datos">
            <label style= for="">E-mail </label> <br>
            <?php if (isset($errores["email"])): ?>
            <input class="casillero" placeholder="Introduzca su e-mail"  type="email" name="email"  value="">
            <?= $errores["email"] ?>
          <?php else: ?>
                  <input class="casillero" placeholder="Introduzca su e-mail"  type="email" name="email"  value="<?= $emailOk ?>">
                  <?php endif ?>
          </div>

          <div class="ingresar-datos">
            <label style= for="">Confirme e-mail </label> <br>
            <input class="casillero" placeholder="Repita su e-mail"  type="email" name="confirmarEmail"  value="">

            <?php if (isset($errores["email"])): ?>
                  <?= $errores["email"] ?>
                <?php endif ?>
          </div>
<!-- CONTRASEÑA con mas de 5 letras - SIN ESPACIOS - DEBE TENER LETRAS DH.-->
          <div class="ingresar-datos">
            <label style= for=""> Contraseña </label> <br>

            <input class="casillero" placeholder="Introduzca contraseña"  type="password" name="contraseña"  value="">

          <?php   if (isset($errores["contraseña"])): ?>
                  <?= $errores["contraseña"] ?>
                <?php endif ?>
          </div>

          <div class="ingresar-datos">
            <label style= for=""> Confirme contraseña </label> <br>
            <input class="casillero" placeholder="Repita la contraseña"  type="password" name="confirmarContra"  value="">

            <?php if (isset($errores["confirmarContra"])): ?>
                  <?= $errores["confirmarContra"] ?>
                <?php endif ?>
          </div>
          <br>

          <div  class="container-boton">
            <input class="boton" type="submit" name="" id="boton" value="Registrarse">
          </div>

        </div>

      </div>

    </form>

    <?php require_once "footer.php" ?>
  </body>
</html>
