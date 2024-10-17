    <div id="mycontent">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-4">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline" id="mycontent">
                            <div class="card-body box-profile">
                                <div class="text-center">

                                    @if ($users->photo == '' && $users->sex == 'M')
                                        <img src='male.png' class='profile-user-img img-fluid img-circle'
                                            alt='User Image'>
                                    @elseif($users->photo == '' && $users->sex == 'F')
                                        <img src='female.png' class='profile-user-img img-fluid img-circle'
                                            alt='User Image'>
                                    @else
                                        <img src="imageusers/{{$users->photo}}" class='profile-user-img img-fluid img-circle'
                                            alt='User Image'>
                                    @endif

                                </div>
                                <h3 class="profile-username text-center"></h3>
                                <p class="text-muted text-center"></p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                    <b>Nombres</b> <a class="float-right">{{ $users->firstname }} {{$users->lastname}} {{$users->names}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>DNI</b> <a class="float-right">{{ $users->dni."s" }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Celular</b> <a class="float-right">{{ $users->cellphone }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Nacimiento</b> <a class="float-right">{{ $users->datebirth }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Email</b> <a class="float-right">{{ $users->email }}</a>
                                    </li>

                                </ul>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Cambiar Contraseña
                                </button>
                                <p></p>
                                <button type="button" class="btn btn-success" onclick="whatsapp('997852483')">Whatsapp
                                    Desarrollador</button>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->


                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-8">
                        <div class="card">
                            <form accept-charset="utf-8" id="user" method="POST" action="" enctype="multipart/form-data"
                                name="user">
                        <input type="hidden" name="id"value="{{$users->id}}">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">Cambiar datos</li>
                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="settings">
                                            {{-- <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2
                                            col-form-label">Fotografía</label>
                                                <div class="btn btn-default btn-file col-10">
                                                    <i class="fas fa-paperclip"></i> Subir
                                                    <input type='file' id="imgInp" name="photo" onchange="readImage(this);">
                                                </div>
                                                <div class="col-sm-2"></div>
                                                <div class="col-sm-8">
                                                    <br>
                                                    <img id="blah" src="https://via.placeholder.com/150" alt="Tu imagen"
                                                        class="img-bordered" width="200">
                                                </div>
                                            </div> --}}

                                            <div class="form-group row">
                                                <label for="inputcellphone" class="col-sm-2
                                            col-form-label">Celular</label>
                                                <div class="col-sm-10">
                                                    <input type="number" name="cellphone" class="form-control"
                                                placeholder="cellphone" value="{{$users->cellphone}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputdatebirth" class="col-sm-2
                                            col-form-label">Nacimiento</label>
                                                <div class="col-sm-10">

                                                    <div class="row">
                                                        <div class="col s4">


                                                            <select name="day" class="form-control">
                                                                <option>Dia</option>
                                                                <?php for ($a = 1; $a <= 31; $a++) {
                                                                    echo "<option value='$a'>" . $a . '</option>' ; } ?> </select>
                                                        </div>

                                                        <div class="col s4">
                                                            <select name="month" class="form-control">
                                                                <option>Mes</option>
                                                                <?php
                                                                $mes = ['', 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul',
                                                                'Ago', 'Sep', 'Oct', 'Nov', 'Dic'];
                                                                for ($b = 1; $b <= 12; $b++) { echo "<option value='$b'>" .
                                                                    $mes[$b] . '</option>' ; } ?> </select>
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
                                                            <?php  echo "<script> user.day.value=".substr($users->datebirth,8,2).";</script>"  ?>
                                                            <?php  echo "<script> user.month.value=".substr($users->datebirth,5,2).";</script>"  ?>
                                                            <?php  echo "<script> user.year.value=".substr($users->datebirth,0,4).";</script>"  ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                {{-- <div class="offset-sm-2 col-sm-10">
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="userUpdateProfile();">Guardar cambios</button>
                                                </div> --}}
                                            </div>

                                        </div>
                                        <!-- /.tab-pane -->
                                    </div>
                                    <!-- /.tab-content -->
                                </div><!-- /.card-body -->

                        </div>
                        <!-- /.nav-tabs-custom -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>


