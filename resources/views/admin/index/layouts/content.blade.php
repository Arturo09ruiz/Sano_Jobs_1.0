<div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Imagen de Perfil" src="">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">{{auth()->user()->name }}</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Bienvenido!</h6>
                </div>
                <a href="#" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>Mi Perfil</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="fa fa-headset"></i>
                  <span>Soporte Técnico</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();"
                 {{ __('Logout') }} class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Cerrar Sesión</span>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active"><a href="#">Panel de Control</a></li>
                </ol>
              </nav>
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">

            <div class="col-xl-4 col-md-6">
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Vacantes Registradas</h5>
                        <span class="h2 font-weight-bold mb-0">{{$vacants_number}}</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                          <i class="fab fa-wpforms"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Usuarios Registrados</h5>
                      <span class="h2 font-weight-bold mb-0">{{$users_number}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                        <i class="fa fa-user"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-0">Vacantes Registradas</h5>
                        <span class="h2 font-weight-bold mb-0">{{$vacants_number}}</span>
                      </div>
                      <div class="col-auto">
                        <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                          <i class="ni ni-chart-pie-35"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <div class="col-xl-2 col-md-6">

            </div>
            <div class="col-xl-2 col-md-6">

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12">
          <div class="card bg-default">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-light text-uppercase ls-1 mb-1">Vista Previa</h6>
                  <h5 class="h3 text-white mb-0">Vacantes Registradas</h5>
                </div>

              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart">
                <!-- Chart wrapper -->
                <canvas id="vacants" class="chart-canvas"></canvas>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
              &copy; 2020 <a href="#" class="font-weight-bold ml-1" target="_blank">Arturo Ruiz & Henry Silva</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">Arturo Ruiz</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">Henry Silva</a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">Términos y Condiciones de la Aplicacion</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
