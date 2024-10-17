<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta property="og:title" content="Mi Certificación en : {{$registry_detail->registry->course->description}} en AnthonyCode Encuestas"/>
<meta property="og:description" content="El presente certificado es expedido como reconocimiento alcanzado en el proceso formativo en. {{$registry_detail->registry->course->description}}"/>
<meta name="image" id="oimage"property="og:image" content="{{url('storage/certificados/r/edicion/40/'.$registry_detail->code_certification.".png")}}">

    <title>SAEEV</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}  ">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
    <!-- Google Font: Source Sans Pro -->

    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <script src="{{asset('linkedin.js')}}"></script>
      <script type="text/javascript" src="{{asset('certification.js')}}"></script>
 <script src="{{ asset('axios.min.js') }}"></script>
  <script src="{{ asset('function.js') }}"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  {{ session('success') }}

   <!-- jQuery -->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    {{-- <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script> --}}
</head>
  <body class="pos-relative">

    <div class="ht-100v d-flex align-items-center justify-content-center">
      <div class="wd-lg-70p wd-xl-50p tx-center pd-x-40">
        <h1 class="tx-100 tx-xs-140 tx-normal tx-inverse tx-roboto mg-b-0">

          {{-- <canvas id="canvas" height="3672px" width="4752px" class="img-fluid" alt="Responsive image">  </canvas> --}}
    <canvas id="canvas1" height="750px" width="1000px" class="img-fluid padre" alt="Responsive image">


    </canvas>

<form action="" method="post" id="certification"></form>
        </h1>

       <center>
<?php
        $host=$_SERVER["HTTP_HOST"];
        $url=$host.'/certificaciones/registry_detail_id='.$registry_detail->id.'/language='.$language.'/id='.$registry_detail->code_certification;

$folder = $registry_detail->registry->course->folder_certification;
$name = $registry_detail->model_has_role->student->firstname." ".$registry_detail->model_has_role->student->lastname." ".$registry_detail->model_has_role->student->names;
$img = "1";
$route_certification = asset("certification/$folder/$language/$img.png");
//$route_qr = asset("certification_qr/r_datascience/41/codigo.png");
$route_qr = "data:image/png;base64,".base64_encode(QrCode::format('png')->size(150)->generate($url));
?>

<style>
    .linkedin{

        background-image: url("{{asset('dist/img/es_ES.png')}}");
    height: 40px;
            width: 160px;
            background-repeat:no-repeat

    }
</style>


            <?php
    $name_course =$registry_detail->registry->course->description;
    $organizationId ="38714525";
    $date = strtotime($registry_detail->registry->date_certification);
     $issueYear =date("Y", $date);

     $issueMonth =date("m", $date);
      $expirationYear = date("Y", $date);

      $expirationMonth = date("m", $date);
     // $url =   str_replace(":", "%3A", $url);
      //    $url =   str_replace("/", "%2F", $url);

            // modelo url pagina
          //https%3A%2F%2Fdocs.microsoft.com%2Fen-us%2Flearn%2Fcertifications%2Fd365-functional-consultan1t-sales
          $certId =$registry_detail->registry->description;


                ?>

            <div class="form-layout-footer align-content-center">
                <span>Credencial URL </span> <br>
                <div class="row center">
                    <div class="col-lg-2">

                    </div>
                    <div class="col-lg-8">
<input type="text" id="texto" class="form-control" id="" value="{{$url}}">
                <button class="btn btn-success btn-sm"onclick="copiarAlPortapapeles() ;"><i class="fa fa-send mg-r-10"></i> Copiar</button>
                        </div>
                    <div class="col-lg-2">

                         </div>
                </div>

                <p></p>
                <button class="btn btn-outline-info" id="btnpng"><i class="fa fa-send mg-r-10"></i> PNG</button>
                <button class="btn btn-outline-success" id="btnpdf"><i class="fa fa-send mg-r-10"></i> PDF</button>
           <button class="btn linkedin"
   onclick="linkedinCertificationGenerate('{{$name_course}}','{{$organizationId}}','{{$issueYear}}','{{$issueMonth}}','{{$certId}}')" >
  </button>


@role('Administrador')
                    <form  id="certification" method="post" action="" enctype="multipart/form-data"
                                name="certification">
                                {{-- <button class="btn btn-danger"   onclick="certificationSavePhoto();" >Guardar </button>
  <input type='hidden' id="img_source" name="photo" > --}}
                    </form>
@endrole


           <script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
<script type="IN/Share"  data-url="{{''}}"></script>
            </div>


<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your share button code -->
<div class="fb-share-button"
data-href=""
data-layout="button_count">
</div>


</center>

      </div>
    </div>
<p></p>

<script>
    generateCerticationSpanish("{{$route_certification}}","{{$name}}","canvas1","{{$route_qr}}","{{$registry_detail->code_certification}}");

buttons_pdf("canvas")

 //buttons_png();

    $(document).on("click", "#btnpng", function () {

   let lblpng = document.createElement('a');
           lblpng.download = "Certificado.png";
           lblpng.href = canvas1.toDataURL('image/jpeg');
           lblpng.click();

    });


</script>
<input type="hidden" id="imagen" value="">

<div id="mycontent"></div>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v16.0&appId=859285638195545&autoLogAppEvents=1" nonce="dd5Wfr6m"></script>

</body>

