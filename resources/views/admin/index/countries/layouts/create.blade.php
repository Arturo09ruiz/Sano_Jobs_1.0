
  <div class="modal fade" id="registrar_pais" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registrar Pais</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('countries.store')}}" method="POST">

        <div class="modal-body">
                @csrf
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                    </div>
                    <input class="form-control" placeholder="Ingresar Nombre" name="name" required type="text">
                  </div>
                </div>
        </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button  type="submit" class="btn test-buuton btn-primary">Registrar Pais</button>
        </form>

        </div>
      </div>
    </div>
  </div>
