<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">

    <div class="container">

        <a class="navbar-brand" href="index.html">Inicio</a>
        <a class="navbar-brand" href="#"> <u></u> </a>
        <a href="">

        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-default">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="javascript:void(0)">
                            <p>LOGO </p>
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>

            </div>



            @if (Auth::check())



            <ul class="navbar-nav ml-lg-auto">

                @if (auth()->user()->role_id  == '1')

                <button class="btn btn-primary d-lg-none">

                <li class="nav-item d-lg-none">
                    <a href="{{route('admin')}}" class="nav-link nav-link-icon">
                        <i class="letra fa fa-desktop mr-2"></i>
                        <span class="letra ">Panel Administrativo</span>
                    </a>
                </li>
            </button>

            <!-- show -->
                <li class="nav-item prueba">
                    <a href="{{route('admin')}}" class="btn btn-neutral btn-icon">
                        <span class="btn-inner--icon">
                          <i class="fa fa-desktop mr-2"></i>
                        </span>
                        <span class="nav-link-inner--text">Panel Administrativo</span>
                      </a>
                </li>
                <br>
            @elseif(auth()->user()->role_id  == '2')

            <li class="nav-item d-lg-none">
                <a href="{{route('admin-manager')}}" class="nav-link nav-link-icon">
                    <i class="letra fa fa-desktop mr-2"></i>
                    <span class="letra ">Panel Administrativo</span>
                </a>
            </li>
        </button>

        <!-- show -->
            <li class="nav-item prueba">
                <a href="{{route('admin-manager')}}" class="btn btn-neutral btn-icon">
                    <span class="btn-inner--icon">
                      <i class="fa fa-desktop mr-2"></i>
                    </span>
                    <span class="nav-link-inner--text">Panel Administrativo</span>
                  </a>
            </li>
            <br>

            @endif









            <button class="btn btn-primary d-lg-none">
                <li class="nav-item d-lg-none">

                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"
                     {{ __('Logout') }} class="nav-link nav-link-icon" >
                        <span class="btn-inner--icon">
                            <i class="letra fa fa-sign-out "></i>
                          </span>
                          <span class="letra">Cerrar Sesión</span>
                    </a>

                </li>
            </button>
            <!-- show -->
                <li class="nav-item prueba">
                    <a class="btn btn-neutral btn-icon" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"
                     {{ __('Logout') }}>
                        <span class="btn-inner--icon">
                          <i class="fa fa-sign-out "></i>
                        </span>
                        <span class="nav-link-inner--text">Cerrar Sesión</span>
                      </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>



            </ul>


            @else
   <!-- ocult -->
   <ul class="navbar-nav ml-lg-auto">
    <button class="btn btn-primary d-lg-none">

    <li class="nav-item d-lg-none">
        <a class="nav-link nav-link-icon" data-toggle="modal" data-target="#inicioModal" >
            <i class="letra fa fa-user-o mr-2"></i>
            <span class="letra ">Iniciar Sesion</span>
        </a>
    </li>
</button>

<!-- show -->
    <li class="nav-item prueba">
        <a  data-toggle="modal" data-target="#inicioModal" class="btn btn-neutral btn-icon">
            <span class="btn-inner--icon">
              <i class="fa fa-user-o mr-2"></i>
            </span>
            <span class="nav-link-inner--text">Iniciar Sesión</span>
          </a>
    </li>
    <br>
<button class="btn btn-primary d-lg-none">
    <li class="nav-item d-lg-none">

        <a class="nav-link nav-link-icon" data-toggle="modal" data-target="#registerModal" >
            <span class="btn-inner--icon">
                <i class="letra fa fa-address-book"></i>
              </span>
              <span class="letra">Registrate</span>
        </a>

    </li>
</button>
<!-- show -->
    <li class="nav-item prueba">
        <a href="" data-toggle="modal" data-target="#registerModal" class="btn btn-neutral btn-icon">
            <span class="btn-inner--icon">
              <i class="fa fa-address-book"></i>
            </span>
            <span class="nav-link-inner--text">Registrate</span>
          </a>
    </li>




</ul>
            @endif



        </div>
    </div>
</nav>
