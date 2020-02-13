<?php require_once("phpCompartido/funciones.php"); ?>
<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php require_once("phpCompartido/head.php"); ?>

<body>
  <!-- HEADER -->
  <?php require_once("phpCompartido/header.php"); ?>

  <!-- Hero Slider Begin -->
  <section class="hero-slider">
    <div class="hero-items owl-carousel">
      <div class="single-slider-item set-bg" data-setbg="img/slider-1.jpg">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h1>2020</h1>
              <h2>Catálogo.</h2>
              <a href="#" class="primary-btn">Ver mas</a>
            </div>
          </div>
        </div>
      </div>
      <div class="single-slider-item set-bg" data-setbg="img/slider-2.jpg">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h1>2020</h1>
              <h2>Catálogo.</h2>
              <a href="#" class="primary-btn">Ver mas</a>
            </div>
          </div>
        </div>
      </div>
      <div class="single-slider-item set-bg" data-setbg="img/slider-3.jpg">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h1>2020</h1>
              <h2>Catálogo.</h2>
              <a href="#" class="primary-btn">Ver mas</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Slider End -->

  <!-- Features Section Begin -->
  <section class="features-section spad">
    <div class="features-ads">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="single-features-ads first">
              <img src="img/icons/f-delivery.png" alt="">
              <h4>Envio gratis</h4>
              <p>Envio gratis a todo el país para compra mayores a los Ar$3000.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="single-features-ads second">
              <img src="img/icons/coin.png" alt="">
              <h4>Descuentos de hasta el 30%</h4>
              <p>Aprovechá los beneficios y promociones que te ofrecemos con las mas importantes tarjetas.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="single-features-ads">
              <img src="img/icons/chat.png" alt="">
              <h4>Soporte online 24/7</h4>
              <p>Contactanos durante las 24 horas y te responderemos en la brevedad. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Features Box -->
    <div class="features-box">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-12">
                <div class="single-box-item first-box">
                  <img src="img/f-box-1.jpg" alt="">
                  <div class="box-text">
                    <span class="trend-year">2020 Party</span>
                    <h2>Estilo</h2>
                    <span class="trend-alert">Tendencias</span>
                    <a href="#" class="primary-btn">Ver mas</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="single-box-item second-box">
                  <img src="img/f-box-2.jpg" alt="">
                  <div class="box-text">
                    <span class="trend-year">2020 Trend</span>
                    <h2>Calzados</h2>
                    <span class="trend-alert">Bold & Black</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="single-box-item large-box">
              <img src="img/f-box-3.jpg" alt="">
              <div class="box-text">
                <span class="trend-year">2020 Party</span>
                <h2>Colección</h2>
                <div class="trend-alert">Moda</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Features Section End -->

  <!-- Latest Product Begin -->
  <section class="latest-products spad">
    <div class="container">
      <div class="product-filter">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="section-title">
              <h2>Últimos Productos</h2>
            </div>
            <ul class="product-controls">
              <li data-filter="*">Todo</li>
              <li data-filter=".dresses">Vestidos</li>
              <li data-filter=".bags">Carteras</li>
              <li data-filter=".shoes">Zapatos</li>
              <li data-filter=".accesories">Accesorios</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row" id="product-list">
        <div class="col-lg-3 col-sm-6 mix all dresses bags">
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
        <div class="col-lg-3 col-sm-6 mix all dresses bags">
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
        <div class="col-lg-3 col-sm-6 mix all shoes accesories">
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
        <div class="col-lg-3 col-sm-6 mix all shoes accesories">
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
        <div class="col-lg-3 col-sm-6 mix all dresses shoes">
          <div class="single-product-item">
            <figure>
              <a href="#"><img src="img/products/img-5.jpg" alt=""></a>
              <div class="p-status">new</div>
            </figure>
            <div class="product-text">
              <h6>Musculosa con detalles</h6>
              <p>$2200.90</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mix all accesories bags">
          <div class="single-product-item">
            <figure>
              <a href="#"><img src="img/products/img-6.jpg" alt=""></a>
              <div class="p-status sale">sale</div>
            </figure>
            <div class="product-text">
              <h6>Traje de baño enterizo blanco</h6>
              <p>$2500.90</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mix all dresses bags">
          <div class="single-product-item">
            <figure>
              <a href="#"><img src="img/products/img-7.jpg" alt=""></a>
            </figure>
            <div class="product-text">
              <h6>Body de una pieza</h6>
              <p>$1900.90</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mix all accesories bags">
          <div class="single-product-item">
            <figure>
              <a href="#"><img src="img/products/img-8.jpg" alt=""></a>
              <div class="p-status popular">popular</div>
            </figure>
            <div class="product-text">
              <h6>Vestido al cuerpo</h6>
              <p>$3500.50</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Latest Product End -->

  <!-- Lookbok Section Begin -->
  <section class="lookbok-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 offset-lg-1">
          <div class="lookbok-left">
            <div class="section-title">
              <h2>2020 <br />#verano20</h2>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
              sed do eiusmod tempor incididunt ut labore et dolore magna
              aliqua. Ut enim ad minim veniam, quis nostrud exercitation
              ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit
              esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
              occaecat cupidatat non proident, sunt in culpa qui officia
              deserunt mollit anim id est laborum.</p>
            <a href="#" class="primary-btn look-btn">Ver mas</a>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="lookbok-pic">
            <img src="img/lookbok.jpg" alt="">
            <div class="pic-text">fashion</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Lookbok Section End -->

  <!-- Logo Section Begin -->
  <div class="logo-section spad">
    <div class="logo-items owl-carousel">
      <div class="logo-item">
        <img src="img/logos/logo-1.png" alt="">
      </div>
      <div class="logo-item">
        <img src="img/logos/logo-2.png" alt="">
      </div>
      <div class="logo-item">
        <img src="img/logos/logo-3.png" alt="">
      </div>
      <div class="logo-item">
        <img src="img/logos/logo-4.png" alt="">
      </div>
      <div class="logo-item">
        <img src="img/logos/logo-5.png" alt="">
      </div>
    </div>
  </div>
  <!-- Logo Section End -->

  <!-- FOOTER -->
  <?php require_once("phpCompartido/footer.php"); ?>

</body>

</html>