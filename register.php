<?php require_once("validaciones/validacionRegister.php"); ?>
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
            <h2>Regístrate<span>.</span></h2>
          </div>
        </div>
        <div class="col-lg-8">
          <img src="img/add.jpg" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- Page Add Section End -->

  <!-- Register Section Begin -->
  <div class="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <form action="register.php" class="contact-form" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-6">
                <input type="text" placeholder="Nombre" name="nombre" value="<?=$nombre?>">
              </div>
              <div class="col-lg-6">
                <input type="text" placeholder="Apellido" name="apellido" value="<?=$apellido?>">
              </div>
              <div class="col-lg-6">
                <input type="text" placeholder="Nombre de Usuario" name="userName" value="<?=$userName?>">
              </div>
              <div class="col-lg-6">
              <input type="email" placeholder="E-mail" name="email" value="<?=$email?>">
              </div>
              <div class="col-lg-12">
                <input type="tel" placeholder="Telefono" name="telefono" value="<?=$telefono?>">
              </div>
              <div class="col-lg-6">
                <input type="password" placeholder="Password" name="password" value="<?=$password?>">
              </div>
              <div class="col-lg-6">
                <input type="password" placeholder="Re-Password" name="repassword" value="<?=$password?>">
              </div>
              <div class="col-lg-6">
                <label for="">Foto de perfil:</label>
                <input type="file" name="fotoPerfil" value="">
              </div>
              <div class="col-lg-12 text-right">
                <button type="submit">Crear Cuenta</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3 offset-lg-1">
          <div class="contact-widget">
            <div class="cw-item">
              <h5>Publicidad</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Register Section End -->

  <!-- Alerta de Error -->
  <?php require_once("phpCompartido/errorAlert.php"); ?>
  <!-- Fin alerta de Error -->

  <!-- FOOTER -->
  <?php require_once("phpCompartido/footer.php"); ?>

</body>

</html>