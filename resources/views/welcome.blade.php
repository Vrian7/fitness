<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FITLABEL</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 30px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .3rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Ingresar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrar</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    FITLABEL
                </div>

                <div class="links">
                    <a href="{{ asset('usuarios') }}">Usuario</a>
                    <a href="{{ asset('alimentos') }}">Alimentos</a>
                    <a href="{{ asset('macronutrientes') }}">Macronutrientes</a>
                    <a href="{{ asset('estados_fisicos') }}">Estado Fisico</a>
                    <a href="{{ asset('actividades') }}">Niveles de Actividad</a>
                    <a href="{{ asset('recomendaciones') }}">Recomendaciones</a>
                    <a href="{{ asset('logros') }}">Logros y Metas</a>
                    <a href="{{ asset('avances') }}">Avance</a>
                </div>
            </div>
        </div>
    </body>
</html>
