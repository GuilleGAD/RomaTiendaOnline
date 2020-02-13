<?php

$usuario = "";
$password = "";
$errores = [];

if($_POST){
  //Validar
  if(strlen($_POST["usuario"])==0){
    $errores[] = "El NOMBRE DE USUARIO no puede ser vacío.";
  }
  if(strlen($_POST["password"])==0){
    $errores[] = "El PASSWORD no puede ser vacío.";
  }

  if(sizeof($errores)==0){
    $usuario = $_POST["usuario"];
    $archivo = file_get_contents("json/listaUsuarios.json");
    $listaUsuarios = json_decode($archivo, true);

    if($listaUsuarios[$usuario]==null){
      $errores[] = "El NOMBRE DE USUARIO no existe.";
    }else{
      if(!password_verify($_POST["password"],$listaUsuarios[$usuario]["password"])){
        $errores[] = "El PASSWORD es incorrecto.";
      }else{
        $_SESSION["usuario"] = $usuario;
  
        if(!empty($_POST["recordar"])) {
          $cookie_name = "usuario";
          $cookie_value = $_POST["usuario"];
          setcookie($cookie_name, $cookie_value, time() + 60 * 60 * 24);
        }
        
        header("Location:index.php");exit;
      }
    }
  }

  if(sizeof($errores)!=0){
    $usuario = $_POST["usuario"];
  }

  //header("Location:index.php");exit;
}



?>
