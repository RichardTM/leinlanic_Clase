<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LEINLANIC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script type="text/javascript" language="javascript"></script>
</head>

<body>
    <div class="">
        <header>
            <nav class="navbar navbar-expand-md navbar-dark " style="text-align:center; background:black;">
                <div class="container-fluid">
                    <div class="nav-header ml-auto">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-1">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a href="{{ url('home') }}" class="navbar-brand">
                            <img src="../img/logo1.png" width="30" height="30" class="d-inline-block align-top" alt=""><strong> LEINLA NIC</strong></a>
                    </div>

                    <div class="collapse navbar-collapse" id="navbar-1">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <nav class="navbar navbar-light">
                                    <form class="form-inline">
                                        <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                                        <button class="btn btn-sm btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                </nav>
                            </li>
                            <li class="nav-item"><a class="nav-link" href='/cursos/listacurso'>Inicio</a></li>
                            <!-- Links de autentificacion -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span></a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/perfil">Perfil</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                            <li class="nav-item"><a class="nav-link" href="/admin">Admin</a></li>
                            <li class="nav-item"><a class="nav-link" href="/about">Acerca de</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <style>
        .txverdana {
            font-family: Verdana, Geneva, sans-serif;
            font-size: 35px;
            letter-spacing: 2px;
            word-spacing: 2px;
            color: #000000;
            font-weight: 700;
            text-decoration: none;
            font-style: normal;
            font-variant: normal;
            text-transform: none;
            }

            .bgcard {
                background: #D4D4D4;
                background: -moz-radial-gradient(center, #D4D4D4 0%, #FFFFFF 0%, #D4D4D4 100%);
                background: -webkit-radial-gradient(center, #D4D4D4 0%, #FFFFFF 0%, #D4D4D4 100%);
                background: radial-gradient(ellipse at center, #D4D4D4 0%, #FFFFFF 0%, #D4D4D4 100%);
            }

        .borde2 {
            border-radius: 20px;
            -webkit-box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, 5px 5px 15px 5px
            rgba(0,0,0,0);
            box-shadow: -10px 0px 13px -7px #000000, 10px 0px 13px -7px #000000, 5px 5px 15px 5px
            rgba(0,0,0,0);
        }
        .bgwelcome {
            background-image: url("img/fondoverde.png");
            width: 1366px; height: 768px;"
        }

        body {
        background-color: #d2e3d5;
        }
            .borde1 {
            border: 3px
            outset #50A010;
            border-radius: 20px 20px 20px 20px;
            }

            table {
                border-collapse: separate;
            }
            td, th {
                border: solid 1px rgba(0, 178, 255, 1);
            }
            tr td, th {
                border-top-right-radius: 0;
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
                border-bottom-right-radius: 0;
            }
            th:first-child {
                border-top-left-radius: 10px;
            }
            th:last-child {
                border-top-right-radius: 10px;
            }
            tr:last-child td:first-child {
                border-bottom-left-radius: 10px;
            }
            tr:last-child td:last-child {
                border-bottom-right-radius: 10px;
            }
    </style>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <main class="py-4">
        @yield('content')
    </main>
</body>

</html>
