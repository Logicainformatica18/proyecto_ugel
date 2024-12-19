@extends('template')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
<!-- Asegúrate de incluir Font Awesome en el head de tu HTML -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    .profile-image-container {
        position: relative;
    }

    .profile-image {
        width: 90%;
        display: block;
    }

    .change-image-btn {
        position: absolute;
        bottom: 5px;
        right: 5px;
        padding: 5px;
        background-color: #ffffff;
        color: #0a3cdd;
        border: none;
        border-radius: 50%;
        cursor: pointer;
    }

    /* Opcional: Estilos para mejorar la apariencia del botón */
    .change-image-btn:hover {
        background-color: #0056b3;
    }

    .change-image-btn:focus {
        outline: none;
    }

    .change-image-btn:active {
        background-color: #ffffff;
    }
</style>

<div class="row align-items-center">
    <div class="col col-md-4 col-lg-2 container">
        {{-- Imagen de perfil --}}
        <div class="profile-image-container">
            @if ($users->photo == '' && $users->sex == 'M')
                <img class="img-circle elevation-2 profile-image" src="male.png" alt="User Avatar" id="blah">
            @elseif($users->photo == '' && $users->sex == 'F')
                <img class="img-circle elevation-2 profile-image" src="female.png" alt="User Avatar"id="blah">
            @else
                <img src="imageusers/{{ $users->photo }}" class="img-circle elevation-2 profile-image" alt='User Avatar'id="blah">
            @endif
            <div class="overlay">
                <input type="file" id="profile-image-input" accept="image/*" style="display: none;" onchange="readImage(this);">
                <label for="profile-image-input" class="change-image-btn">
                   &nbsp; <i class="fas fa-pencil"></i> &nbsp;
                </label>
            </div>
        </div>
    </div>
    <div class="col col-md-6 col-lg-6">
        {{-- Información del perfil --}}
        <p></p>
        <h1 style="font-size: 2em"><b>{{ Auth::user()->names }}</b></h1>
        <h2 style="font-size: 40px"><b>{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</b></h2>
                <h2 style="font-size: 20px"><b>{{ Auth::user()->dni }}</b></h2>
        {{ session('success') }}
    </div>
    <div class="col col-md-4 col-lg-4">
        {{-- Otras opciones --}}
        <p></p>
        <h2 style="font-size: 100%">Agregar mis redes Sociales</h2>
    </div>
</div>


        </div><!-- /.container-fluid -->
    </section>


    <p></p>


    <div id="mycontent">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-6">
                        <h5 style="color:#042d89"><b>Información básica</b></h5>
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline" id="mycontent">
                            <div class="card-body box-profile" style="font-size: 12px">



                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Nombre completo</b> <a class="float-right">{{ $users->firstname }}
                                            {{ $users->lastname }}
                                            {{ $users->names }}</a>
                                    </li>

                                    <li class="list-group-item">
                                        <b>Dirección de correo</b> <a class="float-right">{{ $users->email }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>DNI</b> <a class="float-right">{{ $users->dni }}</a>
                                    </li>
                               




                                </ul>



                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->


                        <!-- /.card -->
                    </div>

                    <div class="col-md-6">
                        <h5 style="color:#042d89"><b>Información adicional</b></h5>
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline" id="mycontent">
                            <div class="card-body box-profile" style="font-size: 12px">



                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Sexo</b>
                                        @if ($users->sex == 'M')
                                            <a class="float-right">Masculino</a>
                                        @else
                                            <a class="float-right">Femenino</a>
                                        @endif

                                    </li>



                                    <li class="list-group-item">
                                        <b>Fecha de nacimiento</b> <a class="float-right">{{ $users->datebirth }}</a>
                                    </li>

                                    <li class="list-group-item">
                                        <b>Celular</b> <a class="float-right">{{ $users->cellphone }}</a>
                                    </li>
                                    {{-- <li class="list-group-item">
                                        <b>Nacimiento</b> <a class="float-right">{{ $users->datebirth }}</a>
                                    </li> --}}
                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <!-- /.card -->
                    </div>

                    <div class="col-md-6">
                        <h5 style="color:#042d89"><b>Información laboral</b></h5>
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline" id="mycontent">
                            <div class="card-body box-profile" style="font-size: 12px">

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Cargo</b>
                                        <a class="float-right">Adminsitrador</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Experiencia</b> <a class="float-right">{{ $users->datebirth }}</a>
                                    </li>


                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <!-- /.card -->
                    </div>















                    {{-- <div class="col-md-6">
                        <div class="card">
                            <form accept-charset="utf-8" id="user" method="POST" action=""
                                enctype="multipart/form-data" name="user">
                                <input type="hidden" name="id"value="{{ $users->id }}">
                
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="settings">
                                            <div class="form-group row">
                                                <label for="inputEmail"
                                                    class="col-sm-2
                                            col-form-label">Fotografía</label>
                                                <div class="btn btn-default btn-file col-10">
                                                    <i class="fas fa-paperclip"></i> Subir
                                                    <input type='file' id="imgInp" name="photo"
                                                        onchange="readImage(this);">
                                                </div>
                                                <div class="col-sm-2"></div>
                                                <div class="col-sm-8">
                                                    <br>
                                                    <img id="blah" src="https://via.placeholder.com/150"
                                                        alt="Tu imagen" class="img-bordered" width="200">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputcellphone"
                                                    class="col-sm-2
                                            col-form-label">Celular</label>
                                                <div class="col-sm-10">
                                                    <input type="number" name="cellphone" class="form-control"
                                                        placeholder="cellphone" value="{{ $users->cellphone }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputdatebirth"
                                                    class="col-sm-2
                                            col-form-label">Nacimiento</label>
                                                <div class="col-sm-10">

                                                    <div class="row">
                                                        <div class="col s4">


                                                            <select name="day" class="form-control">
                                                                <option>Dia</option>
                                                                <?php for ($a = 1; $a <= 31; $a++) {
                                                                    echo "<option value='$a'>" . $a . '</option>';
                                                                } ?>
                                                            </select>
                                                        </div>

                                                        <div class="col s4">
                                                            <select name="month" class="form-control">
                                                                <option>Mes</option>
                                                                <?php
                                                                $mes = ['', 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'];
                                                                for ($b = 1; $b <= 12; $b++) {
                                                                    echo "<option value='$b'>" . $mes[$b] . '</option>';
                                                                } ?>
                                                            </select>
                                                        </div>
                                                        <div class="col s4">
                                                            <select name="year" class="form-control">
                                                                <option>Año</option>
                                                                <?php
                                                                $c = 2020;
                                                                while ($c >= 1905) {
                                                                    echo "<option value='$c'>" . $c . '</option>';
                                                                    $c = $c - 1;
                                                                }
                                                                ?>
                                                            </select>
                                                            <?php echo '<script> user.day.value=' . substr($users->datebirth, 8, 2) . ';</script>'; ?>
                                                            <?php echo '<script> user.month.value=' . substr($users->datebirth, 5, 2) . ';</script>'; ?>
                                                            <?php echo '<script> user.year.value=' . substr($users->datebirth, 0, 4) . ';</script>'; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="userUpdateProfile();">Guardar cambios</button>
                                                </div>
                                            </div>

                                        </div>
                               
                                    </div>
                           
                                </div>
                            </form>
                        </div>
                     
                    </div> --}}

                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
