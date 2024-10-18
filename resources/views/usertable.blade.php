    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">


                        <div class="card-header">
                            <h3 class="card-title">Tabla de mantenimiento</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <!-- DataTables -->
                            <table id="example1" class="table table-bordered table-striped table-responsive">
                                <thead>
                                    <th></th>
                                    <th ><img width="20" src="https://img1.freepng.es/20180622/aac/kisspng-computer-icons-download-share-icon-nut-vector-5b2d36055f5105.9823437615296896053904.jpg" alt="" srcset=""></th>
                                    <th>ID</th>
                                    <th>Dni</th>
                                    <th>RUC</th>
                                    <th>Paterno</th>
                                    <th>Materno</th>
                                    <th>Nombres</th>
                                    <th>Email</th>
                                    <th>Celular</th>
                                    <th>Descripción</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    @foreach ($user as $users)
                                        <tr>
                                            <td></td>
                                                  
                                            <td>
                                                <!-- Button trigger modal -->
                                            
                                                                                            <!-- Button trigger modal -->
                                                                                            <button type="button" class="btn btn-success note-icon-pencil"
                                                                                                data-toggle="modal" data-target="#exampleModal"
                                                                                                onclick="userEdit('{{ $users->id }}'); Up();  return false"></button>
                                            
                                                                                            <!-- <button class="note-icon-pencil" ></button> -->
                                                                                            <button class="btn btn-danger note-icon-trash"
                                                                                                onclick="userDestroy('{{ $users->id }}'); return false"></button>
                                                                                        </td>
                                            <td>{{ $users->id }}</td>
                                            <td>{{ $users->dni }}</td>
                                            <td>{{ $users->ruc }}</td>
                                            <td>{{ $users->firstname }}</td>
                                            <td>{{ $users->lastname }}</td>
                                            <td>{{ $users->names }}</td>
                                            <td>{{ $users->email }}</td>
                                            <td>{{ $users->cellphone }}</td>
                                            <td>{{ $users->description }}</td>
                                            
                                         
                              

                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
