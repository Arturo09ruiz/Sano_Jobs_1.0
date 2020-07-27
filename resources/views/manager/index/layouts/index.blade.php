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
  <link rel="stylesheet" href="{{ asset('admin/css/1.css') }}" type="text/css">
</head>

<body>
    @include('manager.index.layouts.navbar')
    @include('manager.index.layouts.content')













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
    <script>
        var enero = JSON.parse("{{ json_encode($enero) }}")
        var febrero = JSON.parse("{{ json_encode($febrero) }}")
        var marzo = JSON.parse("{{ json_encode($marzo) }}")
        var abril = JSON.parse("{{ json_encode($abril) }}")
        var mayo = JSON.parse("{{ json_encode($mayo) }}")
        var junio = JSON.parse("{{ json_encode($junio) }}")
        var julio = JSON.parse("{{ json_encode($julio) }}")
        var agosto = JSON.parse("{{ json_encode($agosto) }}")
        var septiembre = JSON.parse("{{ json_encode($septiembre) }}")
        var octubre = JSON.parse("{{ json_encode($octubre) }}")
        var noviembre = JSON.parse("{{ json_encode($noviembre) }}")
        var diciembre = JSON.parse("{{ json_encode($diciembre) }}")




        var ctx = document.getElementById('vacants');
        var vacants = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Setiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                datasets: [{
                    label: '# De este mes',
                    data: [enero,febrero,marzo,abril,mayo,junio,julio,agosto,septiembre,octubre,noviembre,diciembre],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',

                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
        </script>

</body>
</html>
