<?php

$nombre = "";
$apellido = "";
$email = "";
$asunto = "";
$mensaje = "";
$errores = [];

if($_POST){
  //Validar
  if(strlen($_POST["nombre"])==0){
    $errores[] = "El NOMBRE no puede ser vacío.";
  }
  if(strlen($_POST["apellido"])==0){
    $errores[] = "El APELLIDO no puede ser vacío.";
  }
  if(strlen($_POST["email"])==0){
    $errores[] = "El EMAIL no puede ser vacío.";
  }else if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
    $errores[] = "El EMAIL no es un mail valido.";
  }
  if(strlen($_POST["asunto"])==0){
    $errores[] = "El ASUNTO no puede ser vacío.";
  }
  if(strlen($_POST["mensaje"])==0){
    $errores[] = "El MENSAJE no puede ser vacío.";
  }

  //Registrarlo

  //header("Location:exito.php");exit;
}

if(sizeof($errores)!=0){
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $email = $_POST["email"];
  $asunto = $_POST["asunto"];
  $mensaje = $_POST["mensaje"];
}

?>
