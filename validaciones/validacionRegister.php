<?php

$nombre = "";
$apellido = "";
$userName = "";
$email = "";
$telefono = "";
$password = "";
$repassword = "";
$extension = "";
$errores = [];

if($_POST){
  //Validación de Errores de completado de campos
  if(strlen($_POST["nombre"])==0){
    $errores[] = "El NOMBRE no puede ser vacío.";
  }
  if(strlen($_POST["apellido"])==0){
    $errores[] = "El APELLIDO no puede ser vacío.";
  }
  if(strlen($_POST["userName"])==0){
    $errores[] = "El NOMBRE DE USUARIO no puede ser vacío.";
  }
  if(strlen($_POST["email"])==0){
    $errores[] = "El EMAIL no puede ser vacío.";
  }else if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
    $errores[] = "El EMAIL no es un mail valido.";
  }
  if(strlen($_POST["telefono"])==0){
    $errores[] = "El TELEFONO no puede ser vacío.";
  }else if(is_numeric($_POST["telefono"]) == false){
    $errores[] = "El TELEFONO tiene que ser de solo números.";
  }
  if(strlen($_POST["password"])==0){
    $errores[] = "El PASSWORD no puede ser vacío.";
  }
  if(strlen($_POST["repassword"])==0){
    $errores[] = "El RE-PASSWORD no puede ser vacío.";
  }
  if(strlen($_POST["password"])!=0 && strlen($_POST["repassword"])!=0 &&
    strcmp($_POST["password"],$_POST["repassword"])!=0){
    $errores[] = "El PASSWORD y el RE-PASSWORD son distintos.";
  }
}

if($_FILES){
  //Validación de archivo
  if(strlen($_FILES["fotoPerfil"]["name"])==0){
    $errores[] = "Debe ingresar una FOTO DE PERFIL";
  }else if($_FILES["fotoPerfil"]["error"]!=0){
    $errores[] = "Error al cargar la foto de perfil.";
  }else{
    $extension = pathinfo($_FILES["fotoPerfil"]["name"], PATHINFO_EXTENSION);
    if($extension!="jpg" && $extension!="jpeg" && $extension!="png"){
      $errores[] = "La foto de perfil debe ser jpg, jpeg o png.";
    }else{
      move_uploaded_file($_FILES["fotoPerfil"]["tmp_name"], "img/imageProfiles/".$_POST["userName"].".".$extension);
    }
  }
}

if($_POST){
  //Persistencia de datos en caso de errores
  if(sizeof($errores)!=0){
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $userName = $_POST["userName"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
  }else{
    //REGISTRO DE USUARIOS
    //recuperando usuarios guardados
    $archivo = file_get_contents("json/listaUsuarios.json");
    $listaUsuarios = json_decode($archivo, true);

    //creando nuevo usuario
    $passEncriptado = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $listaUsuarios [] = [
      "Nombre" => $_POST["nombre"],
      "Apellido" => $_POST["apellido"],
      "Nombre de Usuario" => $_POST["userName"],
      "Email" => $_POST["email"],
      "Telefono" => $_POST["telefono"],
      "Password" => $passEncriptado
    ];

    $json = json_encode($listaUsuarios);
    file_put_contents("json/listaUsuarios.json", $json);

    $_SESSION["nombre"] = $_POST["nombre"];
    $_SESSION["apellido"] = $_POST["apellido"];
    $_SESSION["usuario"] = $_POST["userName"];
    $_SESSION["extension"] = $extension;
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["telefono"] = $_POST["telefono"];
    $_SESSION["password"] = $passEncriptado;

    header("Location:index.php");exit;
  }

}

?>
