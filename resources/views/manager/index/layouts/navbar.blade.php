<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{ asset('admin/img/blue.png') }}" class="navbar-brand-img" alt="Logo de la Aplicacion">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            @if (auth()->user()->role_id  == '2')
            <li class="nav-item">
              <a class="nav-link active" href="{{route('admin-manager')}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Panel de Control</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('vacants-manager.index')}}">
                  <i class="fab fa-wpforms"></i>
                  <span class="nav-link-text">Vacantes</span>
                </a>
            </li>
            @endif



          </ul>
          <!-- Divider -->
          <!-- Heading -->
        <h6 class="navbar-heading p-0 text-muted">
          </h6>
          <!-- Navigation -->
          <hr class="my-3">

          <ul class="navbar-nav mb-md-3">

            <li class="nav-item">
              <a class="nav-link active active-pro" href="">
                <i class="fa fa fa-headset"></i>
                <span class="nav-link-text">Soporte Técnico</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
