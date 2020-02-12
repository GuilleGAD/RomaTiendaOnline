<!-- Page Preloder -->
<div id="preloder">
  <div class="loader"></div>
</div>

<!-- Search model -->
<div class="search-model">
  <div class="h-100 d-flex align-items-center justify-content-center">
    <div class="search-close-switch">+</div>
    <form class="search-model-form">
      <input type="text" id="search-input" placeholder="Buscar aquí.....">
    </form>
  </div>
</div>
<!-- Search model end -->

<!-- Header Section Begin -->
<header class="header-section">
  <div class="container-fluid">
    <div class="inner-header">
      <div class="logo">
        <a href="./index.php"><img src="img/logo.png" alt=""></a>
      </div>
      <div class="header-right">
        <img src="img/icons/search.png" alt="" class="search-trigger">

        <?php if(!empty($_SESSION["usuario"])) : ?>
          <a class="icon-user" href="./profile.php">
            <img src="img/icons/man.png" alt="">
          </a>
          <a href="./check-out.php">
            <img src="img/icons/bag.png" alt="">
            <span>2</span>
          </a>
          <a class="icon-user" href="./logout.php">
            <img src="img/icons/logout.png" alt="Cerrar Sesión">
          </a>
        <?php endif ?>

      </div>

      <?php if(empty($_SESSION["usuario"])) : ?>
        <div class="user-access">
          <a href="./register.php">Registrar</a>
          <a href="./login.php" class="in">Iniciar Sesión</a>
        </div>
      <?php else: ?>
        <div class="user-access">
        <h4>Bienvenido <?php echo $_SESSION["usuario"]?></h4>
        </div>
      <?php endif ?>

      <nav class="main-menu mobile-menu float-left">
        <ul>
          <li><a class="<?php echo $index ?>" href="./index.php">Inicio</a></li>
          <li><a class="<?php echo $products ?>" href="./products.php">Productos</a>
            <ul class="sub-menu">
              <li><a href="product-description.php">Producto Selecionado</a></li>
              <li><a href="shopping-cart.php">Carrito de Compra</a></li>
              <li><a href="check-out.php">Finalizar Compra</a></li>
            </ul>
          </li>
          <li><a class="<?php echo $faq ?>" href="./faq.php">F.A.Q.</a></li>
          <li><a class="<?php echo $contact ?>" href="./contact.php">Contacto</a></li>
        </ul>
      </nav>

    </div>
  </div>
</header>
<!-- Header Info Begin -->
<div class="header-info">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="header-item">
          <img src="img/icons/delivery.png" alt="">
          <p>Envio gratis para ordenes mayores a $3000 en Arg</p>
        </div>
      </div>
      <div class="col-md-4 text-left text-lg-center">
        <div class="header-item">
          <img src="img/icons/voucher.png" alt="">
          <p>20% Descuento de Estudiante</p>
        </div>
      </div>
      <div class="col-md-4 text-left text-xl-right">
        <div class="header-item">
          <img src="img/icons/sales.png" alt="">
          <p>30% OFF en tu primera compra. Usar Codigo: 30OFF</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Header Info End -->
<!-- Header End -->