
<!-- REGISTER MODAL -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registrate</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <form method="POST" action="{{route('register_user')}}" role="form">
@csrf
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-user-o"></i></span>
                    </div>
                    <input class="form-control" name="name" placeholder="Ingresa Tu Nombre" required type="text">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                    </div>
                    <input class="form-control" name="email" required placeholder="Ingresa Tu Email" type="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-key"></i></span>
                    </div>
                    <input class="form-control" name="password" required placeholder="Ingresa Tu Contraseña" type="password">
                  </div>
                </div>
                <div class="form-group focused">
                    <div class="input-group input-group-alternative">
                      <input class="form-control" name="password_c" required placeholder="Confirmar Contraseña" type="password">
                    </div>
                  </div>
                <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">

                      <select id="country" class="js-example-basic-single country form-control" required name="country_id">
                        <option value="0" disabled selected>Selecciona el Pais</option>

                        @foreach ($countries as $country)
                          <option value="{{$country->id}}" >{{$country->name}}</option>
                        @endforeach

                    </select>

                    </div>
                  </div>

                  <div class="form-group">
                    <p id="text_henry" class="henry_hover">*Si no está seguro sobre su Consejo de Coordinación, consulte con sus Líderes</p>

                    <div class="input-group input-group-alternative mb-3">
                      <select id="cuncils" class="cuncils js-example-basic-single form-control" required name="council_id">
                        <option value="" >Selecciona el Consejo de Coordinación</option>
                      </select>
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <select id="cities" class="js-example-basic-single form-control" required name="city_id">
                        <option value="" disabled selected>Selecciona tu Ciudad</option>
                      </select>
                    </div>
                  </div>

                <div class="row my-4">
                  <div class="col-12">
                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input required class="custom-control-input" required id="customCheckRegister" type="checkbox">
                      <label class="custom-control-label" for="customCheckRegister"><span>Acepto Los <a href="condiciones.html">Términos Y Condiciones del uso de la Aplicación</a></span></label>
                    </div>

                    <span class="text-center"></span>

                </div>
                </div>

            @if (session('danger'))
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="alert alert-danger">
                                {{ session('danger') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if (count($errors))
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                    {{$error}}
                            @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        @endif

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button  type="submit" class="btn test-buuton btn-primary">Crear Cuenta</button>
        </div>
    </form>
      </div>
    </div>
  </div>



