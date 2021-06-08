

<!-- Modal -->
<div class="modal fade" id="modalActualizarPersona" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Persona</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmActualizaPersona" method="post" onsubmit="return agregarNuevaPersona()">
            <label for="paternou">Apellido paterno</label>
            <input type="text" class="form-control" id="paternou" name="paternou" required>
            <label for="maternou">Apellido materno</label>
            <input type="text" class="form-control" id="maternou" name="maternou" required>
            <label for="nombreu">Nombre</label>
            <input type="text" class="form-control" id="nombreu" name="nombreu" required>
            <label for="telefonou">Telefono</label>
            <input type="text" class="form-control" id="telefonou" name="telefonou" required>
            <label for="emailu">Email</label>
            <input type="email" class="form-control" id="emailu" name="emailu" required>
            <br>
            <button class="btn btn-warning">Actualizar</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>