<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/jpg" href="{{ asset('dist/img/favicon.png') }}" />
    <title>Ugel</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style type="text/css">
    .full-height {
        height: 100vh;
        /* altura de la pantalla completa */
    }

    .bg-image {
        background: url("{{ asset('imagen-secundaria.png') }}") no-repeat left center;
        background-size: 100%;
    }

    @font-face {
        font-family: "Kohinoor Bangla";
        src: url("{{ asset('Kohinoor Bangla/KohinoorBangla-Bold.otf') }}");
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: "Kohinoor Bangla";
        src: url("{{ asset('Kohinoor Bangla/KohinoorBangla-Medium.otf') }}");
        font-weight: 300;
        font-style: normal;
    }

    @font-face {
        font-family: "Kohinoor Bangla";
        src: url("{{ asset('Kohinoor Bangla/KohinoorBangla-Light.otf') }}");
        font-weight: 300;
        font-style: normal;
    }

    @font-face {
        font-family: "Kohinoor Bangla";
        src: url("{{ asset('Kohinoor Bangla/KohinoorBangla-Regular.otf') }}");
        font-weight: 500;
        font-style: normal;
    }

    @font-face {
        font-family: "Kohinoor Bangla";
        src: url("{{ asset('Kohinoor Bangla/KohinoorBangla-Semibold.otf') }}");
        font-weight: 600;
        font-style: normal;
    }

    body {
        font-family: 'Kohinoor Bangla', sans-serif;
        font-weight: 300;
        /* Utiliza la variante "Light" por defecto */
    }



    h2 {
        font-weight: 600;
        /* Usará KohinoorBangla-SemiBold.ttf */
        color: black;
    }
</style>

<body>

    <div id="app">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light"style="background-color: #00bf6f">
            <!-- Logo en la izquierda -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link">
                        <img src="{{ asset('logo_ugel.jpg') }}" alt="Logo"
                            class="brand-image img-circle elevation-3"  width="50px">
                        <span class="brand-text font-weight-light"></span>
                    </a>
                </li>
            </ul>

            <!-- Menú de la derecha -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link" style="color: white">
                          <img src="{{ asset('CERRAR-SESION-BLANCO.png') }}" alt="" width="10%">
                       
                        Cerrar Sesión
                    </a>
                </li>
            </ul>
        </nav>

       


        <div class="row container-fluid">
            <div class="col-md-6 bg-image full-height d-none d-md-block">
            </div>
            <div class="col-md-5  full-height d-none d-md-block">
                <p>
                    &nbsp;
                </p>
                <p>
                    &nbsp;
                </p>
                <p>
                    &nbsp;
                </p>
                <p>
                    &nbsp;
                </p>
                <main class="py-4">
                    @yield('content')
                </main>

            </div>
        </div>







        <!-- Coloca este script donde quieras que aparezca el botón -->
        <!-- Asegúrate de tener cargada la hoja de estilos de Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    

       

        <br>

        <footer class="main-footer" style="background-color:#003399;color:white">



            {{-- <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <!-- Descripción a la izquierda -->
                        <p>
                            &nbsp;
                            &nbsp;
                        </p>
                        <h3><b>Ugel</b> </h3>
                        <p></p>
                        <p class="text-justify">
                            Ugel Encuestas hace más de 6 años nuestra organización inicio sus actividades en respuesta a
                            las
                            necesidades de capacitación percibidas en áreas analíticas y ciencia de datos. Nuestros
                            programas, cursos y certificaciones de especialización se caracterizan por el método de
                            enseñanza orientado a la resolución de casos reales, que finalmente contribuyen a fortalecer
                            el
                            aprendizaje.
                        </p>
                        <p>
                            &nbsp;
                            &nbsp;
                        </p>
                        <p>
                            &nbsp;
                            &nbsp;
                        </p>
                        <span
                            style="background-image: linear-gradient(45deg, rgb(255, 0, 149), red); -webkit-background-clip: text; color: transparent;">
                            <a href="https://Ugel.com"target="_blank">Copyright © 2023 Dev.
                                Ugel</a></span>
                    </div>
                    <div class="col-lg-4 text-center">
                        <p>
                            &nbsp;
                            &nbsp;
                        </p>
                        <!-- Enlaces en el centro -->
                        <a href="#">Nosotros</a> |
                        <a href="#">Cursos</a> |
                        <a href="#">Política de Privacidad</a>
                    </div>
                    <div class="col-lg-4 text-right">
                        <p>
                            &nbsp;
                            &nbsp;
                        </p>
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FLogicainformatica2020&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=859285638195545" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                </div>


            </div> --}}

        </footer>
    </div>
</body>

</html>
