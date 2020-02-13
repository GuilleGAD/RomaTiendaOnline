<?php
@session_start();
session_destroy();
if(isset($_COOKIE["usuario"])){
  setcookie("usuario", "", -1);
}

header("Location:index.php");
exit;
?>