<?php require_once("phpCompartido/funciones.php"); ?>
<?php require_once("validaciones/validacionLogin.php"); ?>
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
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 offset-lg-3">
          <form action="login.php" class="contact-form" method="POST">
            <div class="col-12">
              <input type="text" placeholder="Nombre de Usuario" name="usuario" value="<?=$usuario?>">
              <input type="password" placeholder="Password" name="password" value="<?=$password?>">
            </div>
            <div class="form-check col-8 text-left">
              <input class="form-check-input" name="recordar" type="checkbox" value="1" id="recordar">
              <label class="form-check-label" for="recordar">
                Recordarme
              </label>
            </div>
            <div class="col-12 text-right">
              <button type="submit">Inicia Sesión</button>
            </div>
          </form>
        </div>
        <div class="col-12 col-md-4 col-lg-3">
          <div class="col-12 text-right">
            <a href="">Recuperar contraseña</a>
          </div>
        </div>
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