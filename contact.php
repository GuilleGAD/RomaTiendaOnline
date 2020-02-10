<?php require_once("validaciones/validacionContact.php"); ?>
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
            <h2>Contáctanos<span>.</span></h2>
          </div>
        </div>
        <div class="col-lg-8">
          <img src="img/add.jpg" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- Page Add Section End -->

  <!-- Contact Section Begin -->

  <div class="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <form action="contact.php" class="contact-form" method="POST">
            <div class="row">
              <div class="col-lg-6">
                <input type="text" name="nombre" placeholder="Nombre" value="<?=$nombre?>">
              </div>
              <div class="col-lg-6">
                <input type="text" name="apellido" placeholder="Apellido" value="<?=$apellido?>">
              </div>
              <div class="col-lg-12">
                <input type="email" name="email" placeholder="E-mail" value="<?=$email?>">
                <input type="text" name="asunto" placeholder="Asunto"  value="<?=$asunto?>">
                <textarea name="mensaje" placeholder="Mensaje"><?=$mensaje?></textarea>
              </div>
              <div class="col-lg-12 text-right">
                <button type="submit">Enviar mensaje</button>
              </div>
            </div>
          </form>
        </div>

        <!-- Alerta de Error -->
        <?php require_once("phpCompartido/errorAlert.php"); ?>
        <!-- Fin alerta de Error -->

        <div class="col-lg-3 offset-lg-1">
          <div class="contact-widget">
            <div class="cw-item">
              <h5>Ubicación</h5>
              <ul>
                <li>Av. Velez Sársfield 361, </li>
                <li>Shopping Patio Olmos, </li>
                <li>Córdoba Capital, Argentina</li>
              </ul>
            </div>
            <div class="cw-item">
              <h5>Telefonos</h5>
              <ul>
                <li>+54 (0351)535-4592</li>
                <li>+54 (0351)153146924</li>
              </ul>
            </div>
            <div class="cw-item">
              <h5>E-mail</h5>
              <ul>
                <li>contact@roma.com</li>
                <li>www.roma.com</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="map">
        <div class="row">
          <div class="col-lg-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.243046663118!2d-64.19010292718264!3d-31.420075974165194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd3553a5772e0e0ed!2sPatio%20Olmos!5e0!3m2!1ses!2sar!4v1580249393579!5m2!1ses!2sar" height="560" style="border:0;" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact Section End -->

  <!-- FOOTER -->
  <?php require_once("phpCompartido/footer.php"); ?>

</body>

</html>