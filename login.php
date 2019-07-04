<!DOCTYPE>


 <?php
 //preguntamos si está seteada la cookie para hacerle el loguin automáticamente
if(isset($_COOKIE['email'])) {
  //busco al usuario por email
  $usuario = buscarUsuarioPorEmail($_COOKIE['email']);
  //le paso ese mail que guardamos en cookie para loguearlo
  loguearUsuario($usuario);
}

if($_POST){

  //llamamos a la función buscarUsuarioPorEmail y le pasás el mail que te vino por post
  //la función devuleve al usuario si lo encuentra, o null si no lo encuentra
  $usuario = buscarUsuarioPorEmail($_POST['usuario']);
  //preguntamos si no hay un usuario
  if(!$usuario) {
    echo "Usuario y/o contraseña inválida.";
  }

  else {
    //que pregunte si vino por post el reecordarme para crearle la cookie y hacer el loguin automáticamente la próxima vez que visite el sitio
    if($_POST['recordarme']) {
      setcookie('email', $usuario['email'], time() * 3600);
    }
    loguearUsuario($usuario);
  }
}

?>

<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" >
    <title>Login</title>

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
          <form class="" action="profile.php" method="post">
            <input class="boton" type="submit" name="" value="Login">
          </form>
        </div>

        <div class="form-check">
								<label class="form-check-label">
									<input class="form-check-input" type="checkbox" name="rememberUser">
									Recordarme
							  </label>
				</div>

        <div class="container-olvidaste">
          <a href="#">Olvidaste tu contraseña? Dame click</a>
        </div>

      </div>

    </div>
<br>
<br>
<?php require_once "footer.php" ?>

  </body>
</html>
