<?php require_once("validaciones/validacionLogin.php"); ?>
<?php require_once("phpCompartido/funciones.php"); ?>
<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php require_once("phpCompartido/head.php"); ?>

<body>
  <!-- HEADER -->
  <?php require_once("phpCompartido/header.php"); ?>

  <!-- Page Add Section Begin -->
  <section class="page-add">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="page-breadcrumb">
            <h2>Inicia Sesión<span>.</span></h2>
          </div>
        </div>
        <div class="col-lg-8">
          <img src="img/add.jpg" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- Page Add Section End -->

  <!-- Login Section Begin -->
  <div class="contact-section">
    <div class="container">
      <div class="row justify-content-md-center">
        <form action="login.php" class="contact-form" method="POST">
          <div class="col-lg-12">
            <input type="email" placeholder="E-mail" name="email" value="<?=$email?>">
            <input type="password" placeholder="Password" name="password" value="<?=$password?>">
          </div>
          <div class="col-lg-12 text-right">
            <button type="submit">Inicia Sesión</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Login Section End -->

  <!-- Alerta de Error -->
  <?php require_once("phpCompartido/errorAlert.php"); ?>
  <!-- Fin alerta de Error -->

  <!-- FOOTER -->
  <?php require_once("phpCompartido/footer.php"); ?>

</body>

</html>