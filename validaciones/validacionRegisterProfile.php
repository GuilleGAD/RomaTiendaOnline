<?php

$password = "";
$repassword = "";
$errores = [];

if($_POST){
  //Validación de Errores de completado de campos
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
  //verificamos si estamos modificando el perfil de usuario
  if($token == "profile.php"){
    if(strlen($_POST["provincia"])==0){
      $errores[] = "La PROVINCIA no puede ser vacío.";
    }
    if(strlen($_POST["ciudad"])==0){
      $errores[] = "La CIUDAD no puede ser vacío.";
    }
    if(strlen($_POST["direccion"])==0){
      $errores[] = "La DIRECCION no puede ser vacío.";
    }
  }else{
    //En este caso estamos creando un usuario nuevo
    if(strlen($_POST["usuario"])==0){
      $errores[] = "El NOMBRE DE USUARIO no puede ser vacío.";
    }
  }
}

if($_FILES){
  //Validación de archivo
  //Si no cargamos foto de perfil y no estamos modificando el perfil
  if($token != "profile.php"){
    if(strlen($_FILES["fotoPerfil"]["name"])==0){
      $errores[] = "Debe ingresar una FOTO DE PERFIL";
    }else if($_FILES["fotoPerfil"]["error"]!=0){
      $errores[] = "Error al cargar la foto de perfil.";
    }else{
      $extension = pathinfo($_FILES["fotoPerfil"]["name"], PATHINFO_EXTENSION);
      if($extension!="jpg" && $extension!="jpeg" && $extension!="png"){
        $errores[] = "La foto de perfil debe ser jpg, jpeg o png.";
      }else{
        $usuario = $_POST["usuario"];
        move_uploaded_file($_FILES["fotoPerfil"]["tmp_name"], "img/imageProfiles/".$usuario.".".$extension);
      }
    }
  }else{
    if(strlen($_FILES["fotoPerfil"]["name"])!=0){
      if($_FILES["fotoPerfil"]["error"]!=0){
        $errores[] = "Error al cargar la foto de perfil.";
      }
      if(sizeof($errores)==0){
        $extension = pathinfo($_FILES["fotoPerfil"]["name"], PATHINFO_EXTENSION);
        if($extension!="jpg" && $extension!="jpeg" && $extension!="png"){
          $errores[] = "La foto de perfil debe ser jpg, jpeg o png.";
        }else{
          $usuario = $_SESSION["usuario"];
          move_uploaded_file($_FILES["fotoPerfil"]["tmp_name"], "img/imageProfiles/".$usuario.".".$extension);
        }
      }
    }
  }
}

if($_POST){

  if(sizeof($errores)==0){
    //REGISTRO DE USUARIOS
    //recuperando usuarios guardados
    $archivo = file_get_contents("json/listaUsuarios.json");
    $listaUsuarios = json_decode($archivo, true);

    if($listaUsuarios[$_POST["usuario"]] == null || $token == "profile.php"){
      //creando nuevo usuario
      $userName = $_POST["usuario"];
      if($token == "profile.php"){
        $provincia = $_POST["provincia"];
        $ciudad = $_POST["ciudad"];
        $direccion = $_POST["direccion"];
        $userName = $_SESSION["usuario"];
      }
      $passEncriptado = password_hash($_POST["password"], PASSWORD_DEFAULT);
      $listaUsuarios [$userName] = [
        "nombre" => $_POST["nombre"],
        "apellido" => $_POST["apellido"],
        "email" => $_POST["email"],
        "telefono" => $_POST["telefono"],
        "password" => $passEncriptado,
        "extension" => $extension,
        "provincia" => $provincia,
        "ciudad" => $ciudad,
        "direccion" => $direccion
      ];

      $json = json_encode($listaUsuarios);
      file_put_contents("json/listaUsuarios.json", $json);

      if($token == "profile.php"){
        header("Location:profile.php");exit;
      }

      $_SESSION["usuario"] = $_POST["usuario"];
  
      if(!empty($_POST["recordar"])) {
        $cookie_name = "usuario";
        $cookie_value = $_POST["usuario"];
        setcookie($cookie_name, $cookie_value, time() + 60 * 60 * 24);
      }

      header("Location:index.php");exit;

    }else{
      $errores[] = "El nombre de USUARIO ya existe";
    }
  }

  //Persistencia de datos en caso de errores
  if(sizeof($errores)!=0){
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    if($token != "profile.php"){
      $usuario = $_POST["usuario"];
    }else{
      $provincia = $_POST["provincia"];
      $ciudad = $_POST["ciudad"];
      $direccion = $_POST["direccion"];
    }
  }
}

?>
