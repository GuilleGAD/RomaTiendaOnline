<?php

$nombre = "";
$apellido = "";
$usuario = "";
$telefono = "";
$email = "";
$extension = "";
$provincia = "";
$ciudad = "";
$dirección = "";

if(!isset($_SESSION)){ 
  session_start(); 
}

$archivo = file_get_contents("json/listaUsuarios.json");
$listaUsuarios = json_decode($archivo, true);

if(isset($_COOKIE["usuario"])){
  $_SESSION["usuario"] = $_COOKIE["usuario"];
}

if(isset($_SESSION["usuario"])){
  $datosUsuario = $listaUsuarios[$_SESSION["usuario"]];

  $nombre = $datosUsuario["nombre"];
  $apellido = $datosUsuario["apellido"];
  $usuario = $_SESSION["usuario"];
  $telefono = $datosUsuario["telefono"];
  $email = $datosUsuario["email"];
  $extension = $datosUsuario["extension"];
  $provincia = $datosUsuario["provincia"];
  $ciudad = $datosUsuario["ciudad"];
  $direccion = $datosUsuario["direccion"];
}

$url = $_SERVER['REQUEST_URI'];
$token = strtok($url, "/");
$token = strtok("/");

$index = "";
$contact = "";
$products = "";
$faq = "";


if ($token == "index.php") {
  $index = "active";
  $nombrePagina = "Inicio";
} else if ($token == "contact.php") {
  $contact = "active";
  $nombrePagina = "Contacto";
}else if ($token == "products.php") {
  $products = "active";
  $nombrePagina = "Productos";
}else if ($token == "faq.php") {
  $faq = "active";
  $nombrePagina = "F.A.Q.";
}else if ($token == "register.php") {
  $nombrePagina = "Registro";
  if(!empty($_SESSION["usuario"])){
    header("Location:index.php");exit;
  }
}else if ($token == "login.php") {
  $nombrePagina = "Login";
  if(!empty($_SESSION["usuario"])){
    header("Location:index.php");exit;
  }
}else if ($token == "profile.php"){
  $nombrePagina = "Perfil de Usuario";
  if(empty($_SESSION["usuario"])){
    header("Location:index.php");exit;
  }
}else{
  $nombrePagina = "Tienda Online";
}

?>