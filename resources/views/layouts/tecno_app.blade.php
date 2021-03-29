<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="">
    <title>Home - Admin</title>
    <link href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css" rel="stylesheet">
    <link href="{{asset('materialize/css/jqvmap.css')}}" rel="stylesheet">
    <link href="{{asset('materialize/css/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
    <!-- Fullcalendar-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.7.0/fullcalendar.min.css" rel="stylesheet">
    <!-- Materialize-->
    <link href="{{asset('materialize/css/admin-materialize.min.css')}}" rel="stylesheet">
    <link href="{{asset('materialize/css/materialize.css')}}" rel="stylesheet">
    <link href="{{asset('js/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet">
    <!-- Material Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    @if(auth()->user()->tema == 1)
        <link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/nino.css')}}">
    @endif
    @if(auth()->user()->tema == 2)
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/joven.css')}}">
    @endif
    @if(auth()->user()->tema == 3)
        <link href="https://fonts.googleapis.com/css2?family=Chango&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/adulto.css')}}">
    @endif

    @if(auth()->user()->turno == 1)
        <link rel="stylesheet" href="{{asset('css/dia.css')}}">
    @endif
    @if(auth()->user()->turno == 2)
        <link rel="stylesheet" href="{{asset('css/noche.css')}}">
    @endif

</head>
<body>
@php
    $pagina = \App\Models\Pagina::where('path', '=', request()->path())->first();
@endphp
<header>
    <div class="navbar-fixed">
        <nav class="navbar navbar_color">
            <div class="nav-wrapper"><a href="#!" class="brand-logo text_color titulo">Home</a>
                <ul id="nav-mobile" class="right">
                    <li class="hide-on-med-and-down">
                        <div class="col s6">
                            <input id="search" type="text" name="dato" class="validate" placeholder="Buscar">
                        </div>
                    </li>
                    <li class="hide-on-med-and-down">
                        <a href="#!" data-target="dropdown1" class="dropdown-trigger waves-effect text_color">
                            <i class="material-icons">notifications</i>
                        </a>
                    </li>
                    <li><a href="{{route('admin.tema.show')}}" class="waves-effect text_color"><i class="material-icons">settings</i></a></li>
                </ul><a href="#!" data-target="slide-out" class="sidenav-trigger left text_color"><i class="material-icons">menu</i></a>
            </div>
        </nav>
    </div>
    <ul id="slide-out" class="sidenav sidenav_color">
        <li><div class="user-view">
                <div class="background" style="background-color: #512da8">
                </div>
                <a href="#user"><img class="circle" src="{{asset('images/pokemon-pikachu.jpg')}}"></a>
                <a href="#name"><span class="white-text name titulo">John Doe</span></a>
                <a href="#email"><span class="white-text email titulo">jdandturk@gmail.com</span></a>
            </div></li>
        <li><a class="subheader text_color titulo">Super Usuario</a></li>
        <li><a href="#!" class="text_color titulo"><i class="material-icons text_color">cloud</i>Gestionar Usuarios</a></li>
        <li><div class="divider"></div></li>
        <li><a class="subheader text_color titulo">Administrativos</a></li>
        <li><a href="#!" class="text_color titulo"><i class="material-icons text_color">cloud</i>Gestionar Eventos</a></li>
        <li><a href="#!" class="text_color titulo"><i class="material-icons text_color">cloud</i>Gestionar Correos</a></li>
        <li><a href="#!" class="text_color titulo"><i class="material-icons text_color">cloud</i>Administrar Mensajes</a></li>
        <li><div class="divider"></div></li>
        <li><a class="subheader text_color titulo">Reportes y Estadísticas</a></li>
        <li><a href="#!" class="text_color titulo"><i class="material-icons text_color">cloud</i>Reporte de Eventos</a></li>
        <li><a href="#!" class="text_color titulo"><i class="material-icons text_color">cloud</i>Estadísticas de Vísitas</a></li>
    </ul>
</header>
<main class="body_color">
    <div class="container">
        @yield('contenido')
    </div>
</main>
<footer class="page-footer footer_color">
    <div class="container">
        <div class="row">
            <div class="col s6 m3">
                <img class="materialize-logo" src="{{asset('materialize/img/materialize-logo.png')}}" alt="Materialize">
                <p class="text_color contenido">Tecnología Web.</p>
                <p class="text_color contenido" style="font-size: 32px">visitas : {{$pagina->visitas}}</p>
            </div>
        </div>
    </div>
</footer><!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="{{asset('js/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('materialize/js/materialize.js')}}"></script>
<script rel="script" type="text/javascript" src="{{asset('materialize/js/page-scripts/table-custom-elements.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/moment.min.js"></script>

<!-- External libraries -->

<!-- jqvmap -->
<script type="text/javascript" src="{{asset('materialize/js/jqvmap/jquery.vmap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('materialize/js/jqvmap/jquery.vmap.world.js')}}" charset="utf-8"></script>
<script type="text/javascript" src="{{asset('materialize/js/jqvmap/jquery.vmap.sampledata.js')}}"></script>

<!-- ChartJS -->
{{--<script type="text/javascript" src="{{asset('materialize/js/Chart.js')}}"></script>
<script type="text/javascript" src="{{asset('materialize/js/Chart.Financial.js')}}"></script>--}}


<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.7.0/fullcalendar.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
<script rel="script" type="text/javascript" src="{{asset('materialize/js/datatable.js')}}"></script>
<script src="{{asset('materialize/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('materialize/js/masonry.pkgd.min.js')}}"></script>


<!-- Initialization script -->
<script src="{{asset('materialize/js/admin.js')}}"></script>
<script src="{{asset('materialize/js/page-scripts/dashboard.js')}}"></script>
<script src="{{asset('materialize/js/init.js')}}"></script>
<script>
    $('#search').autocomplete({
        source: function (request, response){
            console.log(request.term);
            $.ajax({
                method: 'get',
                url: "http://localhost:8000/api/busqueda",
                dataType: 'json',
                data: {
                    dato: request.term,
                },
                success: function (data) {
                    response(data)
                }
            })
        },
        minLength: 1,
        select: ''
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances1 = M.Sidenav.init(elems, {});

        var elems2 = document.querySelectorAll('select');
        var instances2 = M.FormSelect.init(elems2, {});

        var elems3 = document.querySelectorAll('.datepicker');
        var instances3 = M.Datepicker.init(elems3, {
            format: 'yyyy/mm/dd'
        });
    });
</script>
</body>
</html>
