
  <div class="modal fade" id="registrar_vacant" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"  role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registrar Vacante</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="store_vacant" action="{{route('vacants.store')}}" method="POST">

        <div class="modal-body">
            <div class="row">
            <div class="col-md-6">
                @csrf

                <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-building"></i></span>
                      </div>
                      <input class="form-control" placeholder="Ingresar Nombre de la Empresa" name="business" required type="text">
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                      </div>
                      <input class="form-control" placeholder="Ingresar Email de la Empresa" name="email" required type="email">
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                      </div>
                      <input class="form-control telefono" id="telefono" placeholder="Ingresar Numero de Telefono de la Empresa" name="telefono" required type="text">
                    </div>
                </div>

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

                <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-spell-check"></i></span>
                      </div>
                      <input class="form-control" placeholder="Ingresar Fecha Límite" name="deadline" required type="date">
                    </div>
                </div>

                <input type="hidden" class="listrequirements" name="requirements" id="listrequirements">




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
                <br>


            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">

                      <select class="form-control js-example-basic-single" name="category_id">
                        <option value="" disabled selected>Selecciona la Categoria</option>

                        @foreach ($categories as $category)
                            <option value="{{$category->id}}" >{{$category->name}}</option>
                         @endforeach

                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">

                      <select class="form-control js-example-basic-single" name="team_id">
                        <option value="" disabled selected>Selecciona El Equipo de Trabajo</option>

                        @foreach ($teams as $team)
                            <option value="{{$team->id}}" >{{$team->name}}</option>
                         @endforeach

                        </select>
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

