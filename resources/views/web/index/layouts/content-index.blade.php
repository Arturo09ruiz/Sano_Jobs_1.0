<div class="wrapper">
    <div class="section section-hero section-shaped">
      <div class="shape  shape-default">
        <div class="fondo">

        </div>
      </div>
      <div class="page-header">


        {{-- REGISTER SUCCESS --}}
        @if (session('info'))
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <br>
                        <div class="alert alert-success">
                            {{ session('info') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        @endif



        <div class="container shape-container d-flex -items-center py-lg">

          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center">
                <h1 class="text-white ">Vacantes de Empleo</h1>
                <h2 class="display-4 font-weight-normal text-white display-1">El Momento es Ahora! </h2>
              </div>
            </div>

            <br>
            <div class="container">
              <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-4">
                  <input class="form-control" placeholder="Ingresa Tu Palabra Clave. Ej:Administrativo" required type="text">
                  <br>
                  <br>

                </div>
                <div class="col-md-4 ">
                  <select class="js-example-basic-single form-control" name="" id="">
                    <option value="" disabled selected>Selecciona Tu Pais</option>
                    <option value="">Peru </option>
                    <option value="">Venezuela</option>
                    <option value="">Colombia</option>
                    <Option>China</Option>
                </select>
               <br>
                </div>


                <div class="col-md-2">
                  <div class="posion">
                    <button type="submit" class="btn btn-visualizar">Buscar</button>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>

      </div>



      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <div class="section features-6">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="info info-horizontal info-hover-primary">
              <div class="description pl-4">
                <h5 class="title">  <i class=" fa fa-globe"></i> Registrate</h5>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi maxime deleniti eligendi modi totam maiores reiciendis praesentium at, similique, laudantium omnis vero possimus.</p>
              </div>
            </div>
            <div class="info info-horizontal info-hover-primary mt-5">
              <div class="description pl-4">
                <h5 class="title"><i class="fa fa-list"></i>Ingresa tu Palabra Clave</h5>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Architecto ratione voluptates corrupti officiis. Maiores, error. Sed est quos maiores iusto impedit cumque quia.</p>
              </div>
            </div>
            <div class="info info-horizontal info-hover-primary mt-5">
              <div class="description pl-4">
                <h5 class="title"><i class=" fa fa-map-marker"></i>Indica tu Pais</h5>
                <p>That’s what I do. That’s what I’m here for. Don’t be afraid to be wrong because you can’t learn anything from a compliment. If everything I did failed - which it doesn't.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-10 mx-md-auto">
            <img class="ml-lg-5" src="{{ asset('img/2.png') }}" width="100%">
          </div>
        </div>
      </div>
    </div>

    <br /><br />
    <footer class="footer">
      <div class="container">
            <h3 class="text-primary text-center font-weight-light mb-2">Servicios De Bienestar y Autosuficiencia</h3>
            <h5 class="mb-0 text-center font-weight-light">"Y es Mi Propósito Abastecer a mis santos, porque todas las cosas son mías" </h5>
            <h5 class="mb-0 text-center font-weight-light">Doctrina y Convenios 104:15</h5>
        <hr>
        <div class="row align-items-center justify-content-md-between">
          <div class="col-md-6">
            <div class="copyright">
              &copy; 2020 <a href="" target="_blank">Arturo Ruiz y Henry Silva</a>.
            </div>
          </div>
          <div class="col-md-6">
            <ul class="nav nav-footer justify-content-end">
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank"></a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">Acerca de </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">Términos y Condiciones</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
