<?php
session_start();

function validarRegistro($datos)
{
  $errores = [];

  //TOMO LO RECIBIDO POR EL FOMRULARIO Y LO GUARDO SIN ESPACIOS
  $nombre = trim($datos["nombre"]);
  $apellido = trim($datos["apellido"]);
  $email = trim($datos["email"]);
  $confirmarEmail = trim($datos["confirmarEmail"]);

  $contrasenia = trim($datos["contrasenia"]);
  $confirmarcontrasenia = trim($datos["confirmarContra"]);
  $pais=$datos["pais"];
  $foto = $_FILES["foto"];
  // uso el valor del name de select

  //VALIDACION DE CADA DATO
  if ($nombre == "") {
    $errores["nombre"] = "Completa tu nombre";
    //SI EL NOMBRE ESTA VACIO,LARGA ESTE MENSAJE
  }
  if ($apellido == "") {
    $errores["apellido"] = "Completa tu apellido";
    //SI EL APELLIDO ESTA VACIO, LARGA ESTE MENSAJE.
  }
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errores["email"] = "El e-mail no es válido";

  }else if(existeUsuario($email)){
    $errores["email"] = "El mail ya se encuentra registrado";
  }
  if($email != $confirmarEmail){
      $errores["confirmarEmail"] = "Las cuentas no coinciden";

    }
    if ($confirmarEmail == "") {
      $errores["confirmarEmail"] = "Completa con una cuenta";
}
    if ($contrasenia == ""){
      $errores["password"] = "Completa la contraseña";
    }
    else if (strlen($contrasenia)<4)
    {
      $errores["password"] = "Escribe al menos 4 caracteres";

    }elseif (strstr($contrasenia,'DH') ==false) {
      $errores["password"] = "La constraseña debe contener las letras DH";
    }else if($contrasenia != $confirmarcontrasenia){
      $errores["rePassword"] = "Las contraseñas no coinciden";

    }
    if ($confirmarcontrasenia == ""){
      $errores["rePassword"] = "Confirmá la contraseña";

    }
    if ($pais == ""){
      $errores["pais"] = "Completá tu país";

    }
    // Si no subieron foto
		if ($foto['error'] != UPLOAD_ERR_OK) {
			$errores['foto'] = 'Elegí foto de perfil';
		} else {
			// Entro aquí siempre que hayan subido un archivo
			$ext = pathinfo($foto['name'], PATHINFO_EXTENSION);

			if ( $ext != 'jpg' && $ext != 'png' && $ext != 'gif' ) {
				$errores['foto'] = 'Las extensiones permitidas son JPG, PNG y GIF';
			}
		}

    return $errores;
}
//Busca el último ID registrado en json
  function nextId(){
    $json = file_get_contents("usuarios.json");
    $arrayJson = json_decode($json, true);

    if(!$arrayJson){ //si viene vacio
      return $nextId = 1;
  }

    $ultimoUsuario = array_pop($arrayJson["usuarios"]);  //Esto trae el último usuarios
    $nextId = $ultimoUsuario["id"] + 1;

    return $nextId;
  }

  function armarUsuario(){
//ARMO ARRAY ASOCIATIVO PARA GUARDAR LOS DATOS EN LA VARIABLE USUARIOS
 $usuario =[
    "id" => nextId(),
    "nombre" => trim($_POST["nombre"]),
    "apellido" => trim($_POST["apellido"]),
    "email" => trim($_POST["email"]),
    "foto" => '',
    "password" => password_hash($_POST["contrasenia"], PASSWORD_DEFAULT),
    "pais" => $_POST["pais"]
    //HASHEO LA CONTRASEÑA PARA QUE NO SE PUEDA VER
  ];

return $usuario;
}
//DESPUES DE ARMAR EL USUARIO Y CHEQUEAR QUE NO ESTÉ MAL, SE GUARDA EL USUARIO EN USUARIOS.JSON
function guardarUsuario($usuario){
  $json = file_get_contents("usuarios.json");
  $arrayJson = json_decode($json, true);
  $arrayJson["usuarios"][] = $usuario;

  $json = json_encode($arrayJson, JSON_PRETTY_PRINT);
  file_put_contents("usuarios.json",$json);
  //PUSH DEL JSON EN USUARIOS.JSON
}

//Buscamos usuario por email para corroborar que ya no esté registrado
function buscarUsuarioPorEmail($email){

  $json = file_get_contents("usuarios.json");
  $arrayJson = json_decode($json, true);
  $usuarios = $arrayJson["usuarios"];

  foreach ($usuarios as $usuario) {
    if($email == $usuario["email"]){
      return $usuario;
    }

  }
  return null;
}

//Validar que no se duplique usuario
function existeUsuario($email){
  return buscarUsuarioPorEmail($email) !== null; //si buscar por email encontró un usuario, te devuelve el usuario/true, sino null
}

function saveImage($file) {
		//Obtenemos el nombre de la imagen
		$name = $file['name'];

		//Obtenemos la extensión del nombre de la imagen
		$ext = pathinfo($name, PATHINFO_EXTENSION);

		// Armo el nombre único y la ruta final del archivo
		$finalPath = 'archivos/' . uniqid('img-') . "." . $ext;

		//Obtengo el archivo temporal que tiene PHP en memoria
		$tempFile = $file['tmp_name'];

		//Subo el archivo a mi destino FINAL
		move_uploaded_file($tempFile,  $finalPath);

		return $finalPath;
	}



  function existeEmail($email){
//  Traigo a todos los usuarios
    $json = file_get_contents("usuarios.json");


		$allUsers = json_decode($json, true);
		//  Recorrer el array y preguntar si está el email
		foreach ($allUsers as $oneUser) {
			if ($oneUser["email"] == $email) {
				return true;
			}
		}
		// 3. Si no encuentro el email
		return false;
	}


  function validarLogin() {
		// Creo un array de errores vacío
		$error = [];
		// Guardo lo que vino en post en la posición 'name'
		$email = trim($_POST['usuario']);
		$password = trim($_POST['contrasenia']);
		// Si $email está vació
		if ( empty($email) ) {
			// Seteo en el array de errores la posición 'inEmail'
			$error['inEmail'] = 'El campo correo electrónico es obligatorio';
		} elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) { // Si NO es un formato de correo electrónico
			$error['inEmail'] = 'Escribí un formato de correo válido';
		} elseif ( !existeEmail($email) ) {
			$error['inEmail'] = 'Ese usuario no está registrado';
		} else {
			// Si el email existe en mi DB, traigo toda la data del usuario
			$theUser = buscarUsuarioPorEmail($email);
			if ( !password_verify($password, $theUser['contrasenia']) ) {
				$error['inPassword'] = 'Las crendenciales no coinciden';
			}
		}
		// Si $password está vació
		if ( empty($password) ) {
			// Seteo en el array de errores la posición 'inPassword'
			$error['inPassword'] = 'La contraseña no puede estar vacía';
		} elseif ( strlen($password) < 5 ) { // Si la longitud es inferior a 5 caracteres
			$error['inPassword'] = 'La contraseña debe tener 5 letras o más';
		}

		return $error;
  }


// Funcion de logueo
function loguearUsuario($usuario)
{
  //$usuario va a ser un array con todos los datos del usuario
  //eliminamos la posición password para no tener ese dato en sesión
  unset($usuario['password']);
  //en sesión guardo a todo el usuario (array), para poder acceder a todos sus datos
  $_SESSION["usuario"] = $usuario;
  //lo redirecciono al perfil
  header('location: profile.php');
  //para cortar la ejecución
  exit;
}

function estaLogueado()
{
  return isset($_SESSION['usuario']);
}


?>
