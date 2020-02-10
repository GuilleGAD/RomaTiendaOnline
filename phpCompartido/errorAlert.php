<!-- Alerta de Error -->
<?php if(sizeof($errores)!=0) : ?>
  <script>
        $(document).ready(function()
        {
          $("#mostrarmodal").modal("show");
        });
  </script>
  <div class="modal" id="mostrarmodal" tabindex="5" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">Error en Formulario</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php foreach($errores as $error) :?>
            <p><?php echo $error ?></p>
          <?php endforeach ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<?php endif ?>
<!-- Fin alerta de Error -->