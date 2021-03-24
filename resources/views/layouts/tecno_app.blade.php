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
    <!-- Material Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    {{--<link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css2?family=Chango&display=swap" rel="stylesheet">
{{--    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,900&display=swap" rel="stylesheet">--}}
</head>
<style>
    @font-face {
        font-family: "fuente";
        src: url("http://127.0.0.1:8000/font/Chango-Regular.ttf");
    }

    .titulo{
        font-family: "fuente", cursive !important;
        /*font-family: "fuente", sans-serif !important;*/
        font-size: 40px ;
        font-weight: 900 !important;
    }
</style>
<body>
<header>
    <div class="navbar-fixed">
        <nav class="navbar white">
            <div class="nav-wrapper"><a href="#!" class="brand-logo grey-text text-darken-4">Home</a>
                <ul id="nav-mobile" class="right">
                    <li class="hide-on-med-and-down"><a href="#!" data-target="dropdown1" class="dropdown-trigger waves-effect"><i class="material-icons">notifications</i></a></li>
                    <li><a href="{{route('admin.tema.show')}}" class="waves-effect"><i class="material-icons">settings</i></a></li>
                </ul><a href="#!" data-target="slide-out" class="sidenav-trigger left"><i class="material-icons black-text">menu</i></a>
            </div>
        </nav>
    </div>
    <ul id="slide-out" class="sidenav">
        <li><div class="user-view">
                <div class="background" style="background-color: #0D47A1">
                </div>
                <a href="#user"><img class="circle" src="{{asset('images/pokemon-pikachu.jpg')}}"></a>
                <a href="#name"><span class="white-text name">John Doe</span></a>
                <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
            </div></li>
        <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
        <li><a href="#!">Second Link</a></li>
        <li><div class="divider"></div></li>
        <li><a class="subheader">Subheader</a></li>
        <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    </ul>
</header>
<main>
    <div class="container">
        @yield('contenido')
    </div>
</main>
<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col s6 m3">
                <img class="materialize-logo" src="{{asset('materialize/img/materialize-logo.png')}}" alt="Materialize">
                <p>Made with love by Materialize.</p>
            </div>
            <div class="col s6 m3">
                <h5>About</h5>
                <ul>
                    <li><a href="#!">Blog</a></li>
                    <li><a href="#!">Pricing</a></li>
                    <li><a href="#!">Docs</a></li>
                </ul>
            </div>
            <div class="col s6 m3">
                <h5>Connect</h5>
                <ul>
                    <li><a href="#!">Community</a></li>
                    <li><a href="#!">Subscribe</a></li>
                    <li><a href="#!">Email</a></li>
                </ul>
            </div>
            <div class="col s6 m3">
                <h5>Contact</h5>
                <ul>
                    <li><a href="#!">Twitter</a></li>
                    <li><a href="#!">Facebook</a></li>
                    <li><a href="#!">Github</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer><!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="{{asset('materialize/js/materialize.js')}}"></script>
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
<script src="{{asset('materialize/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('materialize/js/masonry.pkgd.min.js')}}"></script>


<!-- Initialization script -->
<script src="{{asset('materialize/js/admin.js')}}"></script>
<script src="{{asset('materialize/js/page-scripts/dashboard.js')}}"></script>
<script src="{{asset('materialize/js/init.js')}}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems, {});

        var elems2 = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems2, {});
    });
</script>
</body>
</html>
