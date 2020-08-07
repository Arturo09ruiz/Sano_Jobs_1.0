<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{--
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png"> --}}
    <title>
        CREA - Área Sudamerica Noroeste
    </title>
    @laravelPWA

    <!--     Fonts and icons     -->
    <link href="{{ asset('css/fonts/1.css') }}" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="{{ asset('vendor/font-awesome/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('css/1.css') }}" rel="stylesheet" />

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

</head>
<style>
    .henry_hover{
        text-align: center;
        display: none;
    }
    .henry_change{
        text-align: center;
        display: block !important;
        font-size: 12px;
        color:#c7c7c7;
    }
</style>
<body class="body-color-test">


    <!-- NAVBAR -->



    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.html">Inicio</a>
            <a class="navbar-brand" href="#"> <u></u> </a>
            <a href="">

            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-default"
                aria-controls="navbar-default" aria-expanded="false" aria-label="Toggle navigation">
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
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>

                </div>



                @if (Auth::check())



                    <ul class="navbar-nav ml-lg-auto">

                        @if (auth()->user()->role_id == '1')

                            <button class="btn btn-primary d-lg-none">

                                <li class="nav-item d-lg-none">
                                    <a href="{{ route('admin') }}" class="nav-link nav-link-icon">
                                        <i class="letra fa fa-desktop mr-2"></i>
                                        <span class="letra ">Panel Administrativo</span>
                                    </a>
                                </li>
                            </button>

                            <!-- show -->
                            <li class="nav-item prueba">
                                <a href="{{ route('admin') }}" class="btn btn-neutral btn-icon">
                                    <span class="btn-inner--icon">
                                        <i class="fa fa-desktop mr-2"></i>
                                    </span>
                                    <span class="nav-link-inner--text">Panel Administrativo</span>
                                </a>
                            </li>
                            <br>
                        @elseif(auth()->user()->role_id == '2')

                            <li class="nav-item d-lg-none">
                                <a href="{{ route('admin-manager') }}" class="nav-link nav-link-icon">
                                    <i class="letra fa fa-desktop mr-2"></i>
                                    <span class="letra ">Panel Administrativo</span>
                                </a>
                            </li>
                            </button>

                            <!-- show -->
                            <li class="nav-item prueba">
                                <a href="{{ route('admin-manager') }}" class="btn btn-neutral btn-icon">
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

                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();" {{ __('Logout') }}
                                    class="nav-link nav-link-icon">
                                    <span class="btn-inner--icon">
                                        <i class="letra fa fa-sign-out "></i>
                                    </span>
                                    <span class="letra">Cerrar Sesión</span>
                                </a>

                            </li>
                        </button>
                        <!-- show -->
                        <li class="nav-item prueba">
                            <a class="btn btn-neutral btn-icon" href="{{ route('logout') }}" onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();" {{ __('Logout') }}>
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
                                <a class="nav-link nav-link-icon" data-toggle="modal" data-target="#inicioModal">
                                    <i class="letra fa fa-user-o mr-2"></i>
                                    <span class="letra ">Iniciar Sesion</span>
                                </a>
                            </li>
                        </button>

                        <!-- show -->
                        <li class="nav-item prueba">
                            <a data-toggle="modal" data-target="#inicioModal" class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon">
                                    <i class="fa fa-user-o mr-2"></i>
                                </span>
                                <span class="nav-link-inner--text">Iniciar Sesión</span>
                            </a>
                        </li>
                        <br>
                        <button class="btn btn-primary d-lg-none">
                            <li class="nav-item d-lg-none">

                                <a class="nav-link nav-link-icon" data-toggle="modal" data-target="#registerModal">
                                    <span class="btn-inner--icon">
                                        <i class="letra fa fa-address-book"></i>
                                    </span>
                                    <span class="letra">Registrate</span>
                                </a>

                            </li>
                        </button>
                        <!-- show -->
                        <li class="nav-item prueba">
                            <a href="" data-toggle="modal" data-target="#registerModal"
                                class="btn btn-neutral btn-icon">
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
    <br>
    <br>


    <div class="container">
        <div class="row">

            <!-- Se muestra en responsive -->
            <div class="d-lg-none pruba_div col-12">
                <a onclick="view();" href="#">
                    <h5 class="list-black color_filtro_inicio  mt-3 centrado">Filtros</h5>
                </a>

                <div class="filter-nop" id="filter">
                    <input placeholder="Buscar" class="MVRT form-control">
                    <br>
                    <li class="points">

                    <li><a class="dropdown-toggle list-black" onclick="viewtest();" href="#">Categorias</a></li>
                    <div class="mag" id="view-test-list">
                        <ul class="points">
                            <li class="points font-body-text-black"><input type="checkbox"> Construcción</li>
                            <li class="points font-body-text-black"><input type="checkbox"> Construcción</li>
                            <li class="points font-body-text-black"><input type="checkbox"> Construcción</li>
                            <li class="points font-body-text-black"><input type="checkbox"> Construcción</li>
                            <li class="points font-body-text-black"><input type="checkbox"> Construcción</li>
                            <li class="points font-body-text-black"><input type="checkbox"> Construcción</li>
                            <li class="points font-body-text-black"><input type="checkbox"> Construcción</li>
                            <li class="points font-body-text-black"><input type="checkbox"> Construcción</li>
                            <li class="points font-body-text-black"><input type="checkbox"> Construcción</li>
                            <li class="points font-body-text-black"><input type="checkbox"> Construcción</li>

                        </ul>
                    </div>
                    <br>

                    <a class="list-black" href="#">Ubicación:</a>
                    <div>
                        <select class="js-example-basic-single form-control" name="" id="">
                            <option value="" disabled selected>Selecciona Tu Pais</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <br>
                        <select class="js-example-basic-single form-control" name="" id="">
                            <option value="" disabled selected>Seleccionar Consejo </option>
                            <option value="">Maracaibo</option>
                            <option value="">Caracas</option>
                            <option value="">Barcelona</option>
                            <Option>Valencia</Option>
                        </select>
                    </div>

                    <div>

                        <br>
                        <select class="js-example-basic-single form-control" name="" id="">
                            <option value="" disabled selected>Selecciona La Ciudad</option>
                            <option value="">Ciudad Bolivar</option>
                            <option value="">Caracas</option>
                            <option value="">Barcelona</option>
                            <Option>Puerto la Cruz </Option>
                        </select>

                    </div>
                    <br>

                    <a class="list-black" href="#">Rango de Fechas:</a>
                    <div>

                        <label>Fecha Límite</label>
                        <input class="form-control" type="date">
                        <label>Fecha de Publicación</label>
                        <input class="form-control" type="date">
                    </div>

                    <br>

                    </li>

                </div>
            </div>


            <!-- se muestra escritorio -->
            <div class=" col-4">

                <div class="show-div-test pruba_div">


                    <h5 class="list-black texto-negro mt-3 centrado">Filtros:</h5>
                    <input id="search_vacants" placeholder="Buscar" class="MVRT form-control">
                    <br>

                    <li class="points">

                        <a class="list-black" href="#">Categorias:</a>
                        <div>
                            <select class="js-example-basic-single form-control" name="select_categories" id="select_categories">
                                <option value="" disabled selected>Seleccionar Categoria</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <br>

                        <a class="list-black" href="#">Ubicación:</a>
                        <div>
                            <select class=" js-example-basic-single form-control" id="country">
                                <option value="" disabled selected>Selecciona Tu Pais</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <br>
                            <select id="cuncils" class="js-example-basic-single form-control cuncils" name="">
                                <option value="" disabled selected>Selecciona Tu Consejo</option>

                            </select>

                    <p id="text_henry" class="henry_hover">*Si no está seguro sobre su Consejo de Coordinación, consulte con sus Líderes</p>

                        </div>

                        <div>
                            <br>
                            <select class="js-example-basic-single form-control" name="" id="cities">
                                <option value="" disabled selected>Selecciona La Ciudad</option>
                            </select>

                        </div>
                        <br>

                        <a class="list-black" href="#">Rango de Fechas:</a>
                        <div>

                            <label>Fecha Límite</label>
                            <input id="deadline" class="form-control" type="date">
                            <label>Fecha de Publicación</label>
                            <input id="created" class="form-control" type="date">
                        </div>

                        <br>

                    </li>
                    <div class="row">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-10">
                            <button id="search-f" class="search-f btn btn-white">
                                <span class="test-grande icon-btn-prueba   nav-link-inner--text">Realizar
                                    Busqueda</span>
                            </button>
                        </div>
                        <div class="col-md-1">

                        </div>
                    </div>

                </div>

            </div>





            <!-- ESCRITORIO -->
            <div class="test-div-view-desk col-8">
                @foreach ($vacants as $vacant)


                    <div class="border-mag-v">
                        <div class="card">
                            <div class=" card-header">
                                <b class="test-font ramos"> {{ $vacant->name }} - {{ $vacant->business }} / Ciudad
                                    Bolívar</b>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Descrición de la Vacante:</h5>
                                <p class="card-text">{{ $vacant->description }} </p>
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="card-title">Requerimientos:</h5>

                                        {{-- @foreach ($vacant->requirements as $requerimient)
                                            <li class="font-mini">
                                                {{ $requerimient->nombre }}
                                            </li>
                                        @endforeach --}}


                                    </div>
                                    <div class="col-6">
                                        <div class="boton-aling">
                                            <a class="btn btn-white btn-icon">
                                                <span class="test-grande icon-btn-prueba btn-inner--icon">
                                                    <i class="fa fa-file-text mr-2"></i>
                                                </span>
                                                <span class="test-grande icon-btn-prueba   nav-link-inner--text">Aplicar
                                                    Ahora</span>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <p class="test">Contacto: <b>{{ $vacant->email }} / {{ $vacant->telefono }}</b> </p>
                            </div>
                        </div>
                    </div>
                    <br>
                @endforeach




                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        {{ $vacants->render() }}
                    </ul>
                </nav>
            </div>


            <div class="d-lg-none col-12">
                <br>
                <div class="border-mag-v">
                    <div class="card">
                        <div class="card-header">
                            <b class="ramos"> Asistente Administrativo - EXCON C.A / Ciudad Bolívar</b>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Descrición de la Vacante:</h5>
                            <p class="card-text">La empresa EXCON C.A Busca a un asistente Administrativo, Que se
                                encargue de Administrar las ventas y los ingresos y egresos del almacen </p>
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="card-title">Requerimientos:</h5>
                                    <li class="font-mini">
                                        Puntualidad
                                    </li>
                                    <li class="font-mini">
                                        Amabilidad
                                    </li>
                                    <li class="font-mini">
                                        Ganas de Salir Adelante
                                    </li>
                                    <li class="font-mini">
                                        Conocimiento
                                    </li>
                                    <li class="font-mini">
                                        Experiencia
                                    </li>
                                </div>
                                <div class="col-6">
                                    <div class="boton-aling">
                                        <a class=" btn btn-white btn-icon">
                                            <span class="icon-btn-prueba btn-inner--icon">
                                                <i class="fa fa-file-text mr-2"></i>
                                            </span>
                                            <span class="icon-btn-prueba   nav-link-inner--text">Aplicar Ahora</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <p class="test">Contacto: <b>Exoca@gmail.com / 0285-232-2231</b> </p>
                        </div>
                    </div>
                </div>
                <br>



                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>

        </div>
    </div>


    <footer class="footer">
        <div class="container">
            <h3 class="text-primary text-center font-weight-light mb-2">Servicios De Bienestar y Autosuficiencia</h3>
            <h5 class="mb-0 text-center font-weight-light">"Y es Mi Propósito Abastecer a mis santos, porque todas las
                cosas son mías" </h5>
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










    <script>
         $("#cuncils").click(function(){
            document.getElementById('text_henry').className = 'henry_change';
	    });
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

        $("#search-f").on("click", function() {

            $keyword = $('#search_vacants').val();
            $category = $('#select_categories').val();
            $country = $('#country').val();
            $council = $('#cuncils').val();
            $city = $('#cities').val();
            $deadline = $('#deadline').val();
            $created = $('#created').val();
      



            if($keyword == ""){

            }

            if($category == ""){

            }



        });


        $("#country").change(function(e){
          console.log(e);
          var country_id =
          searchCouncils(e.target.value);
        });

        function searchCouncils(country_id){
          $.ajax({
            url: "http://127.0.0.1:8000/councils/getcouncils",
            type: "POST",
            data:{
              id: country_id,
              _token:'{{ csrf_token() }}'
            },
            cache: false,
            dataType: 'json',
            success: function(dataResult){
              var councils = dataResult.data;
              var bodyData = '';
              if (councils.length === 0 ) {
                bodyData+='<option value="" disabled selected>Selecciona el Consejo</option>';
                $("#cuncils").html(bodyData);
              }else{
                $.each(councils,function(index,row){
                  bodyData+='<option value="'+row.id+'"  >'+row.name+'</option>';
                })
                $("#cuncils").html(bodyData);
              }
            }
          });
        }



        $("#cuncils").change(function(e){
          console.log(e);
          var council_id =
          searchCities(e.target.value);
        });

        function searchCities(council_id){
          $.ajax({
            url: "http://127.0.0.1:8000/cities/getcities",
            type: "POST",
            data:{
              id: council_id,
              _token:'{{ csrf_token() }}'
            },
            cache: false,
            dataType: 'json',
            success: function(dataResult){
              var cities = dataResult.data;
              var bodyData = '';
              if (cities.length === 0 ) {
                bodyData+='<option value="" disabled selected>Selecciona La Ciudad</option>';
                $("#cities").html(bodyData);
              }else{
                $.each(cities,function(index,row){
                  bodyData+='<option value="'+row.id+'"  >'+row.name+'</option>';
                })
                $("#cities").html(bodyData);
              }
            }
          });
        }

    </script>
</body>
