<?php require_once("phpCompartido/funciones.php"); ?>
<?php require_once("validaciones/validacionRegisterProfile.php"); ?>
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
          <img class="avatar img-circle img-thumbnail" id="imagenPrevisualizacion" src="./img/imageProfiles/<?php echo $usuario . "." . $extension ?>">
          <h3><?php echo $usuario?></h3>
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
        <form action="profile.php" class="form" method="POST" id="actualizarPerfil" enctype="multipart/form-data">

          <div class="form-group">
            <div class="col-xs-6">
              <label for="nombre">
                <h4>Nombre</h4>
              </label>
              <input type="text" class="form-control" name="nombre" id="nombre" 
              placeholder="nombre" title="Ingrese su nombre." value="<?php echo $nombre ?>">
            </div>
          </div>

          <div class="form-group">
            <div class="col-xs-6">
              <label for="apellido">
                <h4>Apellido</h4>
              </label>
              <input type="text" class="form-control" name="apellido" id="apellido"
              placeholder="apellido" title="Ingrese su apellido." value="<?php echo $apellido ?>">
            </div>
          </div>

          <div class="form-group">
            <div class="col-xs-6">
              <label for="telefono">
                <h4>Telefono</h4>
              </label>
              <input type="text" class="form-control" name="telefono" id="telefono" value="<?php echo $telefono ?>"
              placeholder="ingrese su número telefónico" title="Ingrese su número telefónico con código de área.">
            </div>
          </div>

          <div class="form-group">
            <div class="col-xs-6">
              <label for="email">
                <h4>Email</h4>
              </label>
              <input type="email" class="form-control" name="email" id="email" value="<?php echo $email ?>"
              placeholder="tu@email.com" title="Ingrese su email.">
            </div>
          </div>

          <div class="form-group">
            <div class="col-xs-6">
              <label for="provincia">
                <h4>Provincia</h4>
              </label>
              <input type="text" class="form-control" name="provincia" id="provincia" placeholder="provincia" 
              <?php if($provincia!=""){echo "value="."\"".$provincia."\"";} ?> title="Ingrese su provincia.">
            </div>
          </div>

          <div class="form-group">
            <div class="col-xs-6">
              <label for="ciudad">
                <h4>Ciudad</h4>
              </label>
              <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="ciudad" 
              <?php if($ciudad!=""){echo "value="."\"".$ciudad."\"";} ?> title="Ingrese su ciudad.">
            </div>
          </div>

          <div class="form-group">
            <div class="col-xs-12">
              <label for="direccion">
                <h4>Dirección</h4>
              </label>
              <input type="text" class="form-control" name="direccion" id="direccion" placeholder="direccion" 
              <?php if($direccion!=""){echo "value="."\"".$direccion."\"";} ?> title="Ingrese su dirección.">
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
              <label for="repassword">
                <h4>Confirmación de Password</h4>
              </label>
              <input type="password" class="form-control" name="repassword" id="repassword" placeholder="confirmación de password" title="Ingrese la verificación de password.">
            </div>
          </div>

          <div class="form-group">
            <div class="col-xs-6">
              <label for="fotoPerfil">
                <h4>Cambiar Foto de Perfil</h4>
              </label>
              <input type="file" name="fotoPerfil" id="seleccionArchivos" accept="image/*" class="text-center center-block file-upload">
              <script src="js/previsualizarImagen.js"></script>
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-12 col-xs-offset-8">
              <br>
              <button class="btn btn-lg btn-success" form="actualizarPerfil" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
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

  <!-- Alerta de Error -->
  <?php require_once("phpCompartido/errorAlert.php"); ?>
  <!-- Fin alerta de Error -->

  <!-- FOOTER -->
  <?php require_once("phpCompartido/footer.php"); ?>

</body>

</html>