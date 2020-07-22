
  <div class="modal fade" id="registrar_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registrar Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('users.store')}}" method="POST">

        <div class="modal-body">
                @csrf
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input class="form-control" placeholder="Ingresar Nombre" name="name" required type="text">
                  </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa "></i></span>
                      </div>
                      <input class="form-control" placeholder="Ingresar Email" name="email" required type="email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-key"></i></span>
                      </div>
                      <input class="form-control" placeholder="Ingresar Contraseña" name="password" required type="text">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">

                      <select id="country" class="js-example-basic-single form-control" required name="country_id">
                        <option value="0" disabled selected>Selecciona el Pais</option>

                        @foreach ($countries as $country)
                          <option value="{{$country->id}}" >{{$country->name}}</option>
                        @endforeach

                    </select>

                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <select id="cuncils" class="js-example-basic-single form-control" required name="council_id">
                        <option value="" >Selecciona el Consejo</option>
                      </select>
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <select id="cities" class="js-example-basic-single form-control" required name="city_id">
                        <option value="" disabled selected>Selecciona la Ciudad</option>
                      </select>
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">

                      <select  class="js-example-basic-single form-control" required name="team_id">
                        <option value="0" disabled selected>Selecciona el Equipo</option>
                        <option value="0">Sin Equipo De Trabajo</option>


                        @foreach ($teams as $team)
                          <option value="{{$team->id}}" >{{$team->name}}</option>
                        @endforeach

                    </select>

                    </div>
                  </div>

                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">

                      <select  class="js-example-basic-single form-control" required name="role_id">
                        <option value="0" disabled selected>Selecciona el Rol Del Usuario</option>


                        @foreach ($roles as $role)
                          <option value="{{$role->id}}" >{{$role->name}}</option>
                        @endforeach

                    </select>

                    </div>
                  </div>
        </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button  type="submit" class="btn test-buuton btn-primary">Registrar Usuario</button>
        </form>

        </div>
      </div>
    </div>
  </div>
