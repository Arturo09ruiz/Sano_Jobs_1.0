<form method="POST" action="{{ route('login') }}">
    @csrf


<div class="modal fade" id="inicioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesión</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                  <div class="form-group mb-3">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user-o"></i></span>
                      </div>
                      <input  id="email" name="email" class="form-control @error('email') is-invalid @enderror"  required placeholder="Ingresa Tu Email" type="email">
                    </div>

                  </div>
                  <div class="form-group focused">
                    <div class="input-group input-group-alternative">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-key"></i></span>
                      </div>
                      <input id="password"  class="form-control  @error('password') is-invalid @enderror" required placeholder="Ingresa tu Contraseña" name="password" autocomplete="current-password" type="password">
                    </div>
                    @error('password')
                    <br>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Estas Credenciales No Concuerdan con nuestros registros!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    @enderror
                  </div>
                  <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                    <label class="custom-control-label" for=" customCheckLogin"><span>Recuerdame</span></label>
                  </div>
                <div class="row mt-3">
                    <div class="col-6">
                      <a href="#" class="text-light"><small></small></a>
                    </div>
                    <div class="col-6 text-right">
                      <a href="#" class="text-light"><small>Olvidaste tu Contraseña?</small></a>
                    </div>
                  </div>
                  @error('email')
                  <br>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Usuario Incorrecto!</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  @enderror
                    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button  type="submit" class="btn test-buuton btn-primary">Iniciar Sesión</button>
        </div>
      </div>
    </div>
</div>

</form>


