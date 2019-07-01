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

  //VALIDACION DE CADA DATO
  if ($nombre == "") {
    $errores["nombre"] = "Completa con un nombre";
    //SI EL NOMBRE ESTA VACIO,LARGA ESTE MENSAJE
  }
  if ($apellido == "") {
    $errores["apellido"] = "Completa con un apellido";
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

    }else if($contrasenia != $confirmarcontrasenia){
      $errores["password"] = "Las contraseñas no coinciden";

    }
    if ($confirmarcontrasenia == ""){
      $errores["password"] = "Completa la contraseña";

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
    //        "foto" => $_FILES["foto"], LA COMENTO PORQUE TODAVIA NO ESTA LA OPCION DE CARGAR FOTO
    "password" => password_hash($_POST["contrasenia"], PASSWORD_DEFAULT),
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



 ?>
