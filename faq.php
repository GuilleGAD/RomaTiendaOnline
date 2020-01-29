<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php require_once("phpCompartido/head.php"); ?>
<link rel="stylesheet" href="css/styleFaq.css">

<body>
  <!-- HEADER -->
  <?php require_once("phpCompartido/header.php"); ?>

  <section class="accordion-section-faq clearfix mt-3" aria-label="Question Accordions">
    <div class="container">

      <h2 class="h2-faq">Preguntas Frecuentes</h2>
      <div class="panel-group-faq" id="accordion" role="tablist" aria-multiselectable="true">

        <div class="panel panel-default-faq">
          <div class="panel-heading-faq p-3 mb-3" role="tab" id="heading2">
            <h3 class="panel-title-faq">
              <a class="collapsed-faq" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                Dónde encontrarnos?
              </a>
            </h3>
          </div>
          <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
            <div class="panel-body-faq px-3 mb-4">
              <p>Av. Velez Sársfield 361, Shopping Patio Olmos. (Córdoba Capital, Argentina)</p>
            </div>
          </div>
        </div>

        <div class="panel panel-default-faq">
          <div class="panel-heading-faq p-3 mb-3" role="tab" id="heading1">
            <h3 class="panel-title-faq">
              <a class="collapsed-faq" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                Qué productos ofrecemos?
              </a>
            </h3>
          </div>
          <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
            <div class="panel-body-faq px-3 mb-4">
              <p>Los mejores productos del país.</p>
            </div>
          </div>
        </div>

        <div class="panel panel-default-faq">
          <div class="panel-heading-faq p-3 mb-3" role="tab" id="heading0">
            <h3 class="panel-title-faq">
              <a class="collapsed-faq" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
                Cúales son los métodos de pago?
              </a>
            </h3>
          </div>
          <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
            <div class="panel-body-faq px-3 mb-4">
              <p>Aceptamos todos los métodos de pagos, tales como:</p>
              <ul>
                <li>Efectivo.</li>
                <li>Tarjetas de Créditos.</li>
                <li>Tarjetas de Débitos.</li>
                <li>Bitcoins.</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="panel panel-default-faq">
          <div class="panel-heading-faq p-3 mb-3" role="tab" id="heading3">
            <h3 class="panel-title-faq">
              <a class="collapsed-faq" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                Cúales son las tarjetas con beneficios?
              </a>
            </h3>
          </div>
          <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
            <div class="panel-body-faq px-3 mb-4">
              <p>Ofrecemos grandes descuentos con la tarjeta del Shopping.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- FOOTER -->
  <?php require_once("phpCompartido/footer.php"); ?>

</body>

</html>