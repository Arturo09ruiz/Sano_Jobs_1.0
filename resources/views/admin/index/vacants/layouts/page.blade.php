<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Plantilla Sano Jobs Para el Departamento de Autosuficiencia y Bienestar">
  <meta name="author" content="Arturo Ruiz">
  <title>CREA | Panel Administrativo</title>
  <!-- Favicon -->
  <!-- <link rel="icon" href="assets/img/brand/favicon.png" type="image/png"> -->
  <!-- Fonts -->
  <link rel="stylesheet" href="{{ asset('admin/fonts/1.css') }}">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('admin/vendor/nucleo/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('admin/vendor/font-awesome/all.min.css') }}" type="text/css">
  <!-- Page plugins -->
  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="{{ asset('admin/css/1.css') }}" type="text/css">
</head>

<body>
    @include('admin.index.layouts.navbar')
    @include('admin.index.vacants.layouts.content')













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
    <script src="{{ asset('admin/vendor/maskedinput/maskedinput.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();

      $("#telefono").mask("(999) 999-9999");


      });
    </script>


<script>
    $(".btn_requirements").click(function(){

              $(".requirements").append(

                    '<input placeholder="Ingresar Requerimiento" class="form-control requerimient" id="requerimient" required type="text">'+
                    '<br>'

                );




    });


    $(".btn_save").click(function(){

        var listaRequerimientos = [];
        var nombre = $(".requerimient");

        for(var i = 0; i < nombre.length; i++){

        listaRequerimientos.push({
                      "nombre" : $(nombre[i]).val(),
                    })

        }
        $("#listrequirements").val(JSON.stringify(listaRequerimientos));

        document.forms["store_vacant"].submit();



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
</body>
</html>
