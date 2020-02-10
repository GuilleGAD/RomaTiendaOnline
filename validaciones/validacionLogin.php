<?php

$email = "";
$password = "";
$errores = [];

if($_POST){
  //Validar
  if(strlen($_POST["email"])==0){
    $errores[] = "El EMAIL no puede ser vacío.";
  }else if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
    $errores[] = "El EMAIL no es un mail valido.";
  }
  if(strlen($_POST["password"])==0){
    $errores[] = "El PASSWORD no puede ser vacío.";
  }

  //Registrarlo

  //header("Location:exito.php");exit;
}

if(sizeof($errores)!=0){
  $email = $_POST["email"];
  $password = $_POST["password"];
}

?>
