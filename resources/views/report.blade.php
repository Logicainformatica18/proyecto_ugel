<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <title>AnthonyCode Encuestas</title>
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
    <script src="{{ asset('report.js') }}"></script>
    {{-- <script src="{{ asset('survey_client.js') }}"></script>
        <script src="{{ asset('client.js') }}"></script> --}}
    {{-- <script src="{{ asset('associate.js') }}"></script> --}}
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
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('logo-sdcre-corto-blanco.png') }}" alt="" width="150%">
                </a>

            </div>
            <div class="col col-lg-4">

            </div>

            <div class="col col-lg-4" style="justify-content: center; align-items: center; display: flex;">
                {{-- <img src="{{ asset('CERRAR-SESION-BLANCO.png') }}" alt="" width="10%"> --}}
                {{-- <a class="text-blue" href="{{ route('logout') }}" style="color: white;">Cerrar Sesión</a> --}}
            </div>

        </div>
    </nav>
    <p></p>
 
    <div class="">

        <section class="content">

            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">
                        <b>{{ $survey->description }}</b>
                    </h1>
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
                    {{-- @foreach ($survey->survey_detail as $item)
                        <input type="checkbox"id="columns"name="columns"
                            value="{{ $item->id }}-{{ $item->question }}"checked>{{ $item->question }}</option>
                    @endforeach --}}

                    {{-- <button class="btn btn-danger btn-sm" onclick="reportStore();">Mostrar</button> --}}
                    <div id="mycontent">



                        @include('reporttable')

                    </div>

                </div>

            </div>

        </section>
    </div>


            
  <!-- Modal -->
  <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Mantenimiento</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form action="" method="post" role="form" id="report" name="report">
                      <input type="hidden" name="id" id="id">
                      {{ csrf_field() }}
                    Descripción : <input type="text" name="description" id="description" class="form-control">



                      Detalle : <input type="text" name="detail" id="detail" class="form-control">
                     

              </div>
              <div class="modal-footer">
                  <input type="button" value="Nuevo" class="btn btn-warning" onclick="New();$('#report')[0].reset();"
                      name="new">
                  <input type="button" value="Guardar" class="btn btn-success"id="create" onclick=""
                      name="create">
                  <input type="button" value="Modificar" class="btn btn-danger"id="update" onclick="reportUpdate();"
                      name="update">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</body>
