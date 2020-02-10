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
            <h2>Finalizar Compra<span>.</span></h2>
          </div>
        </div>
        <div class="col-lg-8">
          <img src="img/add.jpg" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- Page Add Section End -->

  <!-- Cart Total Page Begin -->
  <section class="cart-total-page spad">
    <div class="container">
      <form action="#" class="checkout-form">
        <div class="row">
          <div class="col-lg-12">
            <h3>Tu Información</h3>
          </div>
          <div class="col-lg-9">
            <div class="row">
              <div class="col-lg-2">
                <p class="in-name">Nombre*</p>
              </div>
              <div class="col-lg-5">
                <input type="text" placeholder="Nombre">
              </div>
              <div class="col-lg-5">
                <input type="text" placeholder="Apellido">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                <p class="in-name">Dirección*</p>
              </div>
              <div class="col-lg-10">
                <input type="text">
                <input type="text">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                <p class="in-name">País*</p>
              </div>
              <div class="col-lg-10">
                <select class="cart-select country-usa">
                  <option>Argentina</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                <p class="in-name">Provincia*</p>
              </div>
              <div class="col-lg-10">
                <input type="text">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                <p class="in-name">Ciudad</p>
              </div>
              <div class="col-lg-10">
                <input type="text">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                <p class="in-name">Codigo Postal/ZIP*</p>
              </div>
              <div class="col-lg-10">
                <input type="text">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                <p class="in-name">Telefono*</p>
              </div>
              <div class="col-lg-10">
                <input type="text">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 text-right">
                <div class="diff-addr">
                  <input type="radio" id="one">
                  <label for="one">Enviar a una diferente dirección</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="order-table">
              <div class="cart-item">
                <span>Producto</span>
                <p class="product-name">Cam. Azul Punteada</p>
              </div>
              <div class="cart-item">
                <span>Precio</span>
                <p>$2900</p>
              </div>
              <div class="cart-item">
                <span>Cantidad</span>
                <p>1</p>
              </div>
              <div class="cart-item">
                <span>Envio</span>
                <p>$100</p>
              </div>

              <div class="cart-total">
                <span>Total</span>
                <p>$3000</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="payment-method">
              <h3>Método de Pago</h3>
              <ul>
                <li>Paypal <img src="img/paypal.jpg" alt=""></li>
                <li>Tarjeta de Crédito / Debito <img src="img/mastercard.jpg" alt=""></li>
                <li>
                  <label for="two">Pagar cuando recibas tu pedido</label>
                  <input type="radio" id="two">
                </li>
              </ul>
              <button type="submit">Finalizar compra</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
  <!-- Cart Total Page End -->

  <!-- FOOTER -->
  <?php require_once("phpCompartido/footer.php"); ?>

</body>

</html>