@extends('template')
@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Usuarios</h1>
                    {{ session('success') }}
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Usuarios</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
        onclick="New();$('#user')[0].reset();user.fotografia.src='https://via.placeholder.com/150';">
        Agregar
    </button>
    <p></p>

  <!-- /.content -->
  {{-- {{ $user->onEachSide(1)->links() }} --}}
    <p></p>
    <div id="mycontent">
        @include("usertable")
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <form action="" method="post" role="form" id="user" name="form">
                        <input type="hidden" name="id" id="id">
                        {{ csrf_field() }}

                        Dni<input name="dni" type="number" class="form-control">
                        Paterno<input name="firstname" type="text" class="form-control">
                        Materno<input name="lastname" type="text" class="form-control">
                        Nombres<input name="names" type="text" class="form-control">
                        Celular<input type="number" name="cellphone" class="form-control">
                        Email<input type="text" name="email" class="form-control">
                        Descripción<input type="text" name="description" class="form-control">
                        Ruc<input type="number" name="ruc" class="form-control">
                        Contraseña<input type="password" name="password" class="form-control">
                        {{-- Sexo
                        <div class="container">
                            <div class="row ">
                                <div class="col">
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="sex" id="M" value="M">
                                    <label class="form-check-label" for="exampleRadios1">
                                        Masculino
                                    </label>
                                </div>
                                <div class="col">
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="sex" id="F" value="F">
                                    <label class="form-check-label" for="exampleRadios1">
                                        Femenino
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                   
                        {{-- Fecha de Nacimiento :
                        <div class="row">
                            <div class="col s4">
                                <select name="day" class="form-control">
                                    <option>Dia</option>
                                    <?php for ($a = 1; $a <= 31; $a++) { echo "<option value='$a'>" . $a
                                        . '</option>' ; } ?> </select>
                            </div>
                            <div class="col s4">
                                <select name="month" class="form-control">
                                    <option>Mes</option>
                                    <?php
                                    $mes = ['', 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov',
                                    'Dic'];
                                    for ($b = 1; $b <= 12; $b++) { echo "<option value='$b'>" . $mes[$b] . '</option>' ; }
                                        ?> </select>
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
                            </div>
                        </div> --}}
                        <p></p>
                        {{-- <div class="container align-content-center">
                            <div class="form-group row">
                                Fotografía
                                <div class="col-sm-1"></div>
                                <div class="btn btn-default btn-file col-9">
                                    <i class="fas fa-paperclip"></i> Subir
                                    <input type='file' id="imgInp" name="photo" onchange="readImage(this);">
                                </div>


                            </div>
                            <div class="size-100">
                                <br>
                                <img id="blah" name="fotografia" src="https://via.placeholder.com/150" alt="Tu imagen"
                                    class="img-bordered" width="100%">
                            </div>
                        </div> --}}



                </div>
                <div class="modal-footer">
                    <input type="button" value="Nuevo" class="btn btn-warning" onclick="New();$('#user')[0].reset(); user.fotografia.src='https://via.placeholder.com/150';"
                        name="new">
                    <input type="button" value="Guardar" class="btn btn-success" onclick="userStore()" id="create">
                    <input type="button" value="Modificar" class="btn btn-danger" onclick="userUpdate();" id="update">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

 <!-- Modal -->
 <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
 <div class="modal-dialog">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Gestionar Permisos</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div>
         <div class="modal-body">
             <form action="" method="post" role="form" id="user_role" name="form">
                 <input type="hidden" name="id" >
                 {{ csrf_field() }}
                 Roles :
                 <select name="role" id="" class="form-control">
                     @foreach ($roles as $item)
                         <option value="{{ $item->name }}">{{ $item->name }}</option>
                     @endforeach
                 </select>
                 <input type="button" value="Agregar" class="btn btn-success" onclick="userRoleStore()"
                     name="create">


                 <div id="mycontent_detail">
                     @if (isset($user->roles_) == null)

                     @else
                         @include('user_roletable')
                     @endif

                 </div>



         </div>
         <div class="modal-footer">
             <input type="button" value="Nuevo" class="btn btn-warning" onclick="New();$('#role')[0].reset();"
                 name="new">

             <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
             </form>
         </div>
     </div>
 </div>
</div>

@endsection
