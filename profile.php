<?php require_once("phpCompartido/funciones.php"); ?>
<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php require_once("phpCompartido/head.php"); ?>

<link rel="stylesheet" href="css/styleProfile.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<body>
  <!-- HEADER -->
  <?php require_once("phpCompartido/header.php"); ?>


  <hr>
  <div class="container bootstrap snippet">

    <div class="row">
      <div class="col-sm-3">
        <!--left col-->

        <div class="text-center">
          <img src="./img/avatar.png" class="avatar img-circle img-thumbnail" alt="avatar">
          <h6>Cargar una nueva foto de perfil...</h6>
          <input type="file" class="text-center center-block file-upload">
        </div>
        </hr><br>

        <ul class="list-group">
          <li class="list-group-item text-muted">Actividad <i class="fa fa-dashboard fa-1x"></i></li>
          <li class="list-group-item text-right"><span class="pull-left"><strong>Favoritos</strong></span> 125</li>
          <li class="list-group-item text-right"><span class="pull-left"><strong>Compras</strong></span> 23</li>
          <li class="list-group-item text-right"><span class="pull-left"><strong>Seguimiento de Envios</strong></span> 7</li>
          <li class="list-group-item text-right"><span class="pull-left"><strong>Devoluciones</strong></span> 3</li>
        </ul>

      </div>
      <!--/col-3-->
      <div class="col-sm-9">
        <br><br><br>
        <form class="form" action="##" method="post" id="registrationForm">
          <div class="form-group">

            <div class="col-xs-6">
              <label for="first_name">
                <h4>Nombre</h4>
              </label>
              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="nombre" title="Ingrese su nombre.">
            </div>
          </div>
          <div class="form-group">

            <div class="col-xs-6">
              <label for="last_name">
                <h4>Apellido</h4>
              </label>
              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="apellido" title="Ingrese su apellido.">
            </div>
          </div>

          <div class="form-group">

            <div class="col-xs-6">
              <label for="phone">
                <h4>Telefono</h4>
              </label>
              <input type="text" class="form-control" name="phone" id="phone" placeholder="ingrese su número telefónico" title="Ingrese su número telefónico con código de área.">
            </div>
          </div>

          <div class="form-group">
            <div class="col-xs-6">
              <label for="mobile">
                <h4>Celular</h4>
              </label>
              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="ingrese su número de celular" title="Ingrese su número de celular con código de área.">
            </div>
          </div>
          <div class="form-group">

            <div class="col-xs-6">
              <label for="email">
                <h4>Email</h4>
              </label>
              <input type="email" class="form-control" name="email" id="email" placeholder="tu@email.com" title="Ingrese su email.">
            </div>
          </div>
          <div class="form-group">

            <div class="col-xs-6">
              <label for="email">
                <h4>Provincia</h4>
              </label>
              <input type="email" class="form-control" id="location" placeholder="provincia" title="Ingrese su provincia.">
            </div>
          </div>
          <div class="form-group">

            <div class="col-xs-6">
              <label for="password">
                <h4>Password</h4>
              </label>
              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="Ingrese su password.">
            </div>
          </div>
          <div class="form-group">

            <div class="col-xs-6">
              <label for="password2">
                <h4>Confirmación de Password</h4>
              </label>
              <input type="password" class="form-control" name="password2" id="password2" placeholder="confirmación de password" title="Ingrese la verificación de password.">
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-12">
              <br>
              <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
              <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
            </div>
          </div>
        </form>
        <hr>
      </div>
      <!--/col-9-->
    </div>
    <!--/row-->
  </div>
  <br><br><br>

  <!-- FOOTER -->
  <?php require_once("phpCompartido/footer.php"); ?>

</body>

</html>