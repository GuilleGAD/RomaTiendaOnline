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
          <form action="#" class="contact-form">
            <div class="row">
              <div class="col-lg-6">
                <input type="text" placeholder="Nombre">
              </div>
              <div class="col-lg-6">
                <input type="text" placeholder="Apellido">
              </div>
              <div class="col-lg-12">
                <input type="email" placeholder="E-mail">
                <input type="tel" placeholder="Telefono">
              </div>
              <div class="col-lg-6">
                <input type="password" placeholder="Password">
              </div>
              <div class="col-lg-6">
                <input type="password" placeholder="Re-Password">
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

  <!-- FOOTER -->
  <?php require_once("phpCompartido/footer.php"); ?>

</body>

</html>