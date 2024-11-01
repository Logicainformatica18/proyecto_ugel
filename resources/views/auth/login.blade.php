<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ugel</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/jpg" href="{{ asset('dist/img/favicon.png') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> --}}
</head>
<style type="text/css">
    .welcome {
        margin: 0px;
        background-image: url("{{ asset('imagen-de-inicio.png') }}");
        width: 100%;
        background-repeat: no-repeat
    }

    .full-height {
        height: 100vh;
        /* altura de la pantalla completa */
    }

    .bg-image {
        background: url("{{ asset('imagen-de-inicio.png') }}") no-repeat left center;
        background-size: cover;
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

<body class="">
    <div class="">
        <div class="row container-fluid">

            <div class="col-md-4">
                <div class="row h-100 justify-content-center align-items-center">

                    <!-- /.login-logo -->
                    <div class="">
                        <div class="card-body login-card-body">
                            &nbsp;&nbsp;&nbsp;


                            <div class="login-logo">
                                <img src="{{ asset('logo_ugel.jpg') }}" alt="" srcset=""width="30%">

                                <h1 style="font-weight: bold;font-size:50px; color: #042d89;"><b>Ugel</b>
                                </h1>
                            </div>
                            <p class="login-box-msg" style="color:#042d89;">Ingrese sus datos para iniciar sesión</p>

                            <form method="POST" action="{{ route('login') }}">
                                &nbsp;&nbsp;<span style="color: #042d89;font-size:13px">Email</span>
                                {{ csrf_field() }}
                                <div class="input-group mb-3 container">

                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                </div>
                                &nbsp;&nbsp;<span style="color: #042d89;font-size:13px">Contraseña</span>
                                <div class="input-group mb-3 container">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="Contraseña">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>




                                <div class="row container">

                                    <div
                                        class="col-12 text-center md d-flex  justify-content-center align-items-center">
                                        <p></p>

                                        <button type="submit"
                                            class="btn btn-primary md d-flex align-items-center justify-content-center"
                                            style="background-color: #042d89;font-weight: 100%; height:40px;width:70%; border-radius: 20px;">
                                            <span style="color:white; font-size: 1em;">INICIAR SESIÓN</span>
                                        </button>

                                    </div>
                                </div>
                                <div class="row container">
                                    <div class="col-1"></div>
                                    <div class="col-1">
                                        <div class="icheck-primary">
                                            <p></p>

                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <span style="color: #042d89;font-size:12px">Recordarme</span>


                                        </div>
                                    </div>
                                    <div class="col-1"></div>
                                    <div class="col-9">
                                        <p></p>
                                        @if (Route::has('password.request'))
                                            <a class="login-box-msg"
                                                href="{{ route('password.request') }}"style="color:#042d89;font-size:13px">
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                &nbsp;¿Olvidaste tu Contraseña?
                                            </a>
                                        @endif
                                    </div>
                                    <!-- /.col -->

                                    <!-- /.col -->

                                    <!-- /.col -->
                                </div>
                                <p></p>

                                {{-- <div class="social-auth-links text-center mb-3">


                                    <a href="{{ url('auth/google') }}"
                                        class="btn btn-block shadow-sm p-2 mb-5  rounded"
                                        style="background-color:#d43c16;color:white">


                                        <div class="google-auth__GoogleAuthStyled-sc-7d7ymg-0 ewxrDx">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                version="1.1" x="0px" y="0px" viewBox="0 0 48 48"
                                                enable-background="new 0 0 48 48" height="20px" width="20px"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12
 c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24
 c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                                                </path>
                                                <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657
 C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                                                </path>
                                                <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36
 c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                                                </path>
                                                <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571
 c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                                                </path>
                                            </svg><span> Continuar con Google</span>

                                        </div>
                                    </a>
                                </div> --}}
                            </form>

                            </form>



                        </div>
                        <!-- /.login-card-body -->
                    </div>

                </div>
            </div>
            <div class="col-md-8 bg-image full-height d-none d-md-block">
                <!-- contenido de la primera columna -->
            </div>
        </div>
    </div>


    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>

</body>

</html>
