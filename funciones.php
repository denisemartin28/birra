
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

  $contraseña = trim($datos["contraseña"]);
  $confirmarcontraseña = trim($datos["confirmarContra"]);

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

  }else if($email != $confirmarEmail){
      $errores["confirmarEmail"] = "Las cuentas no coinciden";

    }
    if ($confirmarEmail == "") {
      $errores["confirmarEmail"] = "Completa con una cuenta";
}
    if ($contraseña == ""){
      $errores["contraseña"] = "Completa la contraseña";

    }
    else if (strlen($contraseña)<4)
    {
      $errores["contraseña"] = "Escribe al menos 4 caracteres";

    }else if($contraseña != $confirmarcontraseña){
      $errores["confirmarContra"] = "Las contraseñas no coinciden";

    }
    if ($confirmarcontraseña == ""){
      $errores["confirmarContra"] = "Completa la contraseña";

    }
    return $errores;
    }

  function armarUsuario(){
//ARMO ARRAY ASOCIATIVO PARA GUARDAR LOS DATOS EN LA VARIABLE USUARIOS
 $usuario =[
    "nombre" => trim($_POST["nombre"]),
    "apellido" => trim($_POST["apellido"]),
    "email" => trim($_POST["email"]),
    //        "foto" => $_FILES["foto"], LA COMENTO PORQUE TODAVIA NO ESTA LA OPCION DE CARGAR FOTO
    "contraseña" => password_hash($_POST["contraseña"], PASSWORD_DEFAULT),
    //HASHEO LA CONTRASEÑA PARA QUE NO SE PUEDA VER
  ];

return $usuario;
}
//DESPUES DE ARMAR EL USUARIO Y CHEQUEAR QUE NO ESTÉ MAL, SE GUARDA EL USUARIO EN USUARIOS.JSON
function guardarUsuario($usuario){
  $json = file_get_contents("usuarios.json");
  $arrayJson = json_decode($json, true);
  //CONVIERTO A JSON EN UN array
  $arrayJson[] = $usuario;
  $json = json_encode($arrayJson, JSON_PRETTY_PRINT);
  file_put_contents("usuarios.json",$json);
  //PUSH DEL JSON EN USUARIOS.JSON
}
 ?>
