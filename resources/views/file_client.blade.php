<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <title>AnthonyCode</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}  ">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
    <!-- Google Font: Source Sans Pro -->

    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <script src="{{ asset('linkedin.js') }}"></script>
    <script type="text/javascript" src="{{ asset('certification.js') }}"></script>
    <script src="{{ asset('axios.min.js') }}"></script>
    <script src="{{ asset('function.js') }}"></script>
    <script src="{{ asset('survey_client.js') }}"></script>
    <script src="{{ asset('client.js') }}"></script>
    <script src="{{ asset('associate.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    {{ session('success') }}

    <!-- jQuery -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script> --}}
</head>

<body class="pos-relative">
    <nav class="navbar navbar-expand-md  shadow-sm"style="background-color: #042d89">
        <div class="row">
            <div class="col col-lg-4">

            </div>
            <div class="col col-lg-4">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                    Anthony Code
                    {{-- <img src="{{ asset('logo_anthonycode.png') }}" alt="" width="50px"> --}}
                </a>

            </div>
          

            <div class="col col-lg-4" style="justify-content: center; align-items: center; display: flex;">
                {{-- <img src="{{ asset('CERRAR-SESION-BLANCO.png') }}" alt="" width="10%"> --}}
                {{-- <a class="text-blue" href="{{ route('logout') }}" style="color: white;">Cerrar Sesión</a> --}}
            </div>

        </div>
    </nav>

    <p></p>

    <div class="container">

        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <h1><b>{{ $survey->description }}</b></h1>
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div id="mycontent">



                        @include('file_clienttable')

                    </div>

                </div>

            </div>

        </section>
    </div>













    <div id="mycontent"></div>



</body>
