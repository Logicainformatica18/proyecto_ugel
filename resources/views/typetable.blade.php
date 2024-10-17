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
                                    <th ></th>
                                    <th class="sorting">ID</th>
                                    <th class="sorting">Descripción</th>
                                    <th class="sorting">Detalle</th>
                                    <th ><img width="20" src="https://img1.freepng.es/20180622/aac/kisspng-computer-icons-download-share-icon-nut-vector-5b2d36055f5105.9823437615296896053904.jpg" alt="" srcset=""></th>
                                </thead>
                                <tbody>
                                    @foreach ($type as $types)
                                        <tr>
                                            <td></td>
                                            <td>{{ $types->id }}</td>
                                            <td>{{ $types->description }}</td>
                                            <td>{{ $types->detail }}</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success note-icon-pencil"
                                                    data-toggle="modal" data-target="#exampleModal"
                                                    onclick="typeEdit('{{ $types->id }}'); Up();  return false"></button>

                                                <!-- <button class="note-icon-pencil" ></button> -->
                                                <button class="btn btn-danger note-icon-trash" onclick="typeDestroy('{{ $types->id }}'); return false"></button>
                                            </td>

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

