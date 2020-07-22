
  <div class="modal fade" id="registrar_vacant" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"  role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registrar Vacante</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('vacants.store')}}" method="POST">

        <div class="modal-body">
            <div class="col-md-6">
                @csrf
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-spell-check"></i></span>
                    </div>
                    <input class="form-control" placeholder="Ingresar Nombre de la Vacante" name="name" required type="text">
                  </div>
                </div>

                <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-file-alt"></i></span>
                      </div>
                        <textarea class="form-control" name="description" required placeholder="Ingresar Descripción de la Vacante"  cols="3" rows="3"></textarea>
                    </div>
                </div>



                <div>
                    <div class="requirements" id="requirements">

                    </div>
                    <div class="row">
                        <div class="col-md-4">

                        </div>
                        <div class="col-md-8">
                            <button class="btn btn-primary btn_requirements" id="btn-requirements" type="button">Agregar Requerimiento</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button  type="button" id="btn_save" class="btn test-buuton btn_save btn-primary">Registrar Equipo</button>
        </form>

        </div>
      </div>
    </div>
  </div>
