<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">

  <title>
    CREA - Área Sudamerica Noroeste
  </title>
  @laravelPWA

  <!--     Fonts and icons     -->
  <link href="{{ asset('css/fonts/1.css') }}" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link href="{{ asset('vendor/font-awesome/font-awesome.min.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset('css/1.css') }}" rel="stylesheet"/>

  <script src="{{ asset('vendor/jquery/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}" type="text/javascript"></script>
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
</head>


<body class="landing-page">
    @include('web.index.layouts.navbar-index')
    @include('web.index.layouts.content-index')
    @include('web.partials.modal-sesion')
    @include('web.partials.modal-register')




    <script>
        $("#cuncils").click(function(){
            document.getElementById('text_henry').className = 'henry_change';
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
