<?php require_once("phpCompartido/funciones.php"); ?>
<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php require_once("phpCompartido/head.php"); ?>

<body>
  <!-- HEADER -->
  <?php require_once("phpCompartido/header.php"); ?>

  <!-- Page Add Section Begin -->
  <section class="page-add cart-page-add">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="page-breadcrumb">
            <h2>Carrito<span>.</span></h2>
            <a href="#">Inicio</a>
            <a href="#">Hombre</a>
            <a class="active" href="#">Camisas</a>
          </div>
        </div>
        <div class="col-lg-8">
          <img src="img/add.jpg" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- Page Add Section End -->

  <!-- Cart Page Section Begin -->
  <div class="cart-page">
    <div class="container">
      <div class="cart-table">
        <table>
          <thead>
            <tr>
              <th class="product-h">Producto</th>
              <th>Precio</th>
              <th class="quan">Cantidad</th>
              <th>Total</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="product-col">
                <img src="img/product/product-1.jpg" alt="">
                <div class="p-title">
                  <h5>Camisa Azul Punteada</h5>
                </div>
              </td>
              <td class="price-col">$2900</td>
              <td class="quantity-col">
                <div class="pro-qty">
                  <input type="text" value="1">
                </div>
              </td>
              <td class="total">$2900</td>
              <td class="product-close">x</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="cart-btn">
        <div class="row">
          <div class="col-lg-6">
            <div class="coupon-input">
              <input type="text" placeholder="Ingrese Codigo de Cupón">
            </div>
          </div>
          <div class="col-lg-5 offset-lg-1 text-left text-lg-right">
            <div class="site-btn clear-btn">Limpiar</div>
            <div class="site-btn update-btn">Actualizar</div>
          </div>
        </div>
      </div>
    </div>
    <div class="shopping-method">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="shipping-info">
              <h5>Choose a shipping</h5>
              <div class="chose-shipping">
                <div class="cs-item">
                  <input type="radio" name="cs" id="one">
                  <label for="one" class="active">
                    Envio estandar gratis
                    <span>Estimación para Córdoba</span>
                  </label>
                </div>
                <div class="cs-item">
                  <input type="radio" name="cs" id="two">
                  <label for="two">
                    Envio en un día $100
                  </label>
                </div>
                <div class="cs-item last">
                  <input type="radio" name="cs" id="three">
                  <label for="three">
                    Retirar en Local - Gratis
                  </label>
                </div>
              </div>
            </div>
            <div class="total-info">
              <div class="total-table">
                <table>
                  <thead>
                    <tr>
                      <th>Total</th>
                      <th>Subtotal</th>
                      <th>Envio</th>
                      <th class="total-cart">Total Compra</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="total">$2900</td>
                      <td class="sub-total">$2900</td>
                      <td class="shipping">$100</td>
                      <td class="total-cart-p">$3000</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="row">
                <div class="col-lg-12 text-right">
                  <a href="./check-out.php" class="primary-btn chechout-btn">Procesar Compra</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Cart Page Section End -->

  <!-- FOOTER -->
  <?php require_once("phpCompartido/footer.php"); ?>

</body>

</html>