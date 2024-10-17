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

<body class="pos-relative" style="background-color: #e5e5e5">
    <nav class="navbar navbar-expand-md  shadow-sm"style="background-color: #bf0909">
        <div class="row">
            <div class="col col-lg-4">
                <a class="navbar-brand" href="{{ url('/') }}">
&nbsp;&nbsp;&nbsp;&nbsp;
                    <img class=""
                        src="data:image/png;base64,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"
                        alt="" width="200">&nbsp;&nbsp;

                    <span style="font-size: 13px;color:white">Plataforma digital única del Estado Peruano</span>

                </a>
                <style>
                    .img-blanca {
                        filter: invert(100%);
                    }
                </style>
            </div>
            <div class="col col-lg-6">
  
            </div>

            <div class="col col-lg-2" style="justify-content: center; align-items: center; display: flex;">
              
                <img class="img-blanca"
                        src="https://www.gob.pe/assets/escudo_text_gobpe_bicentenario_black-dd0b8b3ea9c67a76fb0c05196563a20f2900ebd82b09507312ce401c4610aa46.svg"
                        alt="" width="100">&nbsp;&nbsp;

                {{-- <img src="{{ asset('CERRAR-SESION-BLANCO.png') }}" alt="" width="10%"> --}}
                {{-- <a class="text-blue" href="{{ route('logout') }}" style="color: white;">Cerrar Sesión</a> --}}
            </div>

        </div>
    </nav>

    <p></p>


    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <p></p>
                {{-- <h2 style="color:#042d89;text-align:left"><b>{{ $survey->description }}</b></h2> --}}

                <div id="mycontent">

                    @include('survey_clienttable')
                </div>
            </div>
            <div class="col-lg-1">
            </div>
            {{-- <div class="col-lg-3">
             <p>
                &nbsp;
            </p>
            <p>
                &nbsp;
            </p>
           
        </div> --}}
        </div>
    </div>



    <p>
        &nbsp;
    </p>
    <p class="container" style="text-align:justify">
        {{-- {{ $survey->detail }} --}}
    </p>


    <p>
        &nbsp;
        &nbsp;
    </p>
    <p>
        &nbsp;
        &nbsp;
    </p>






    {{-- <footer class="" style="background-color:#003399;color:white">



        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Descripción a la izquierda -->
                    <p>
                        &nbsp;
                        &nbsp;
                    </p>
                    <h3><b>SDC RESEARCH</b> </h3>
                    <p></p>
                    <p class="text-justify">
                        Somos la marca relacionada a servicios de investigación de mercados y opinión pública para Perú y Latinoamerica. Nuestros servicios generan y analizan datos entorno a personas, consumidores y mercados; ayudando a la toma de decisiones estratégicas basadas en datos.
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
                        <a href="https://anthonycode.com"target="_blank">Copyright © 2023 Dev. AnthonyCode</a></span>
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
                 <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsdc.research.survey&tabs=timeline&width=500&height=350&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=859285638195545" width="500" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
            </div>


        </div>
    <p>
                        &nbsp;
                        &nbsp;
                    </p>
    </footer> --}}
    <p>&nbsp;
        &nbsp;
    </p>
    <p>&nbsp;
        &nbsp;
    </p>
    <p>&nbsp;
        &nbsp;
    </p>
    <p>&nbsp;
        &nbsp;
    </p>
    <p>&nbsp;
        &nbsp;
    </p>
    <p>&nbsp;
        &nbsp;
    </p>
    <p>&nbsp;
        &nbsp;
    </p>
    <p>&nbsp;
        &nbsp;
    </p>
    <p>&nbsp;
        &nbsp;
    </p>
    <p>&nbsp;
        &nbsp;
    </p>
    <p>&nbsp;
        &nbsp;
    </p>
    <footer class="footer" style="background-color:rgb(32, 32, 32);color:white">
        &nbsp;
    </footer>



    <div class="modal fade" id="ventanaModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">¡Hola equipo!</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p style="text-align: justify">Agradecemos desde ya su participación en este estudio de diagnóstico de las unidades orgánicas sobre madurez de datos, conocimientos de datos y capacidades técnicas. </p>
                         <p  style="text-align: justify">La información recopilada se utilizará únicamente para la elaboración de una matriz de diagnóstico sobre madurez de datos a nivel de unidades orgánicas e individual.</p>
                
                        <p>Valoramos tu tiempo y participación.</p>
                          <p style="text-align: right"><b>UGI – OGTI</b> </p>
                    <p style="text-align: right"><b>Ministerio de Economía y Finanzas</b> </p>
                       <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                      </p>
                      
                      <a  class="btn" style="background-color: #bf0909;color:white" href="{{asset("imageusers/Guía de aplicación de instrumento metodológico para el diagnóstico de madurez de datos, conocimiento de datos y capacidades técnicas(1).pdf")}}" download>Descargar Guía de Aplicación</a>
                   
                  
                </div>
                <div class="modal-footer">
                    <button type="button"style="background-color:black" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Agrega los archivos JS necesarios de Bootstrap y AdminLTE -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>
    <script>
    $(document).ready(function(){
        $('#ventanaModal').modal('show');
    });
</script>
</body>
