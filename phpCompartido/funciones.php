<?php
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
}else if ($token == "login.php") {
  $nombrePagina = "Login";
}else{
  $nombrePagina = "Tienda Online";
}

?>