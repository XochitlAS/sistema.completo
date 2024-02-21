<div class="modal fade bd-example-modal-lg" id="agUsuario" role="dialog" tabindex="1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form action="" method="POST" id="formUsuario">
        <div class="modal-body">
            <div class="row">
                <div class="col md-3">
                  <div class="form-group">
                    <label for="nombrec">Nombre Completo</label>
                    <input type="text" class="form-control m-3" id="nombrec" name="nombrec" placeholder="">
                  </div>
                </div>
            </div>
              <div class="row">
                <div class="col md-3">
                  <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="text" class="form-control m-3" id="telefono" name="telefono" placeholder="">
                  </div>
                </div> 
                <div class="col md-3">
                  <div class="form-group">
                    <label for="nivelusuario">Nivel</label>
                    <select class="form_control" id="nivelusuario" name="nivelusuario">
                      <option value="ventas">Agente de Ventas</option>
                      <option value="tecnico">Tecnico</option>
                      <option value="administrador">Administrador</option>
                    </select>
                  </div>
                </div> 
            </div>
            <div class="row">
            <div class="col md-3">
                <div class="form-group">
                <label for="status">Estatus</label>
                <input type="text" class="form-control m-3" id="status" name="status" placeholder="">
                </div>
              </div>
              <div class="col md-3">
                <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" class="form-control m-3" id="usuario" name="usuario" placeholder="">
                </div>
              </div>
              <div class="col md-3">
                <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="text" class="form-control m-3" id="password" name="password" placeholder="">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" id="button_agg" class="btn btn-primary">Guardar</button>
            </div>
          </div>
      </form>
    </div>
  </div>
</div>

