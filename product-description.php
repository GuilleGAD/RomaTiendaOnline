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
            <h2>Shirts<span>.</span></h2>
            <a href="#">Inicio</a>
            <a href="#">Hombre</a>
            <a class="active" href="#">Camisa</a>
          </div>
        </div>
        <div class="col-lg-8">
          <img src="img/add.jpg" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- Page Add Section End -->

  <!-- Product Page Section Beign -->
  <section class="product-page">
    <div class="container">
      <div class="product-control">
        <a href="#">Anterior</a>
        <a href="#">Siguiente</a>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="product-slider owl-carousel">
            <div class="product-img">
              <figure>
                <img src="img/product/product-1.jpg" alt="">
                <div class="p-status">Nuevo</div>
              </figure>
            </div>
            <div class="product-img">
              <figure>
                <img src="img/product/product-1.jpg" alt="">
                <div class="p-status">Nuevo</div>
              </figure>
            </div>
          </div>

        </div>
        <div class="col-lg-6">
          <div class="product-content">
            <h2>Camisa Hombre Punteado</h2>
            <div class="pc-meta">
              <h5>$2200.90</h5>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
              labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
              viverra maecenas accumsan lacus vel facilisis.</p>
            <ul class="tags">
              <li><span>Categoria :</span> Ropa de Hombre</li>
              <li><span>Tags :</span> Hombre, Remera, Punteado, Noche, Cool</li>
            </ul>
            <div class="product-quantity">
              <div class="pro-qty">
                <input type="text" value="1">
              </div>
            </div>
            <a href="./shopping-cart.php" class="primary-btn pc-btn">Agregar al Carrito</a>
            <ul class="p-info">
              <li>Información del Producto</li>
              <li>Opiniones</li>
              <li>Cuidado del Producto</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Product Page Section End -->

  <!-- Related Product Section Begin -->
  <section class="related-product spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-title">
            <h2>Productos Relacionados</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="single-product-item">
            <figure>
              <a href="#"><img src="img/products/img-1.jpg" alt=""></a>
              <div class="p-status">new</div>
            </figure>
            <div class="product-text">
              <h6>Traje de baño enterizo azul</h6>
              <p>$2200.90</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="single-product-item">
            <figure>
              <a href="#"><img src="img/products/img-2.jpg" alt=""></a>
              <div class="p-status sale">sale</div>
            </figure>
            <div class="product-text">
              <h6>Vestido largo amarillo</h6>
              <p>$2500.90</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="single-product-item">
            <figure>
              <a href="#"><img src="img/products/img-3.jpg" alt=""></a>
              <div class="p-status">new</div>
            </figure>
            <div class="product-text">
              <h6>Body de una pieza</h6>
              <p>$1900.90</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="single-product-item">
            <figure>
              <a href="#"><img src="img/products/img-4.jpg" alt=""></a>
              <div class="p-status popular">popular</div>
            </figure>
            <div class="product-text">
              <h6>Vestido azul con detalles</h6>
              <p>$3500.50</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Related Product Section End -->

  <!-- FOOTER -->
  <?php require_once("phpCompartido/footer.php"); ?>

</body>

</html>