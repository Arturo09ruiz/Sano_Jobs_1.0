<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Plantilla Sano Jobs Para el Departamento de Autosuficiencia y Bienestar">
  <meta name="author" content="Arturo Ruiz">
  <title>Sano Jobs - Panel Administrativo</title>
  <!-- Favicon -->
  <!-- <link rel="icon" href="assets/img/brand/favicon.png" type="image/png"> -->
  <!-- Fonts -->
  <link rel="stylesheet" href="{{ asset('admin/fonts/1.css') }}">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('admin/vendor/nucleo/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('admin/vendor/font-awesome/all.min.css') }}" type="text/css">
  <!-- Page plugins -->
  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('admin/css/1.css') }}" type="text/css">
</head>

<body>
    @include('admin.index.layouts.navbar')
    @include('admin.index.users.layouts.content')













    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap_js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery-scroll-lock/jquery-scrollLock.min.js') }}"></script>
    <!-- Optional JS -->
    <script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/chart.js/Chart.extension.js') }}"></script>
    <!-- Arturo JS -->
    <script src="{{ asset('admin/js/1.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
          console.log("asd");
            $('.js-example-basic-single').select2();
        });

        $("#country").change(function(e){
          console.log(e);
          var country_id =
          searchCouncils(e.target.value);
        });

        function searchCouncils(country_id){
          $.ajax({
            url: "councils/getcouncils",
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
            url: "cities/getcities",
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
    <script>
    $(document).ready(function() {
      $('#users').DataTable({
          "language": {

              "sProcessing":     "Procesando...",
              "sLengthMenu":     "Mostrar _MENU_ registros",
              "sZeroRecords":    "No se encontraron resultados",
              "sEmptyTable":     "Ningún dato disponible en esta tabla",
              "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
              "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
              "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
              "sInfoPostFix":    "",
              "sSearch":         "Buscar:",
              "sUrl":            "",
              "sInfoThousands":  ",",
              "sLoadingRecords": "Cargando...",
              "oPaginate": {
              "sFirst":    "Primero",
              "sLast":     "Último",
              "sNext":     ">",
              "sPrevious": "<"
              },
              "oAria": {
                  "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
              }

  }
      });
      });
    </script>
</body>
</html>
