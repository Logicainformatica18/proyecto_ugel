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
                                    <th ><img width="20" src="https://img1.freepng.es/20180622/aac/kisspng-computer-icons-download-share-icon-nut-vector-5b2d36055f5105.9823437615296896053904.jpg" alt="" srcset=""></th>
                                    <th class="sorting">ID</th>
                                    <th class="sorting">Usuario</th>
                                    <th class="sorting">Plazo</th>
                                    <th class="sorting">Categoría</th>
                                    <th class="sorting">Descripción</th>
                                   
                                    <th class="sorting">Money</th>
                                    <th class="sorting">IGV</th>
                                    <th class="sorting">Cantidad</th>
                                    <th class="sorting">Subtotal</th>
                                    <th class="sorting">Constancia</th>
                                    <th class="sorting">Fecha Solicitud</th>
                                    <th class="sorting">Fecha Recepción</th>
                                    
                                </thead>
                                <tbody>
                                    @foreach ($pay as $pays)
                                        <tr>
                                            <td></td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success note-icon-pencil"
                                                    data-toggle="modal" data-target="#exampleModal"
                                                    onclick="payEdit('{{ $pays->id }}'); Up();  return false"></button>

                                                <!-- <button class="note-icon-pencil" ></button> -->
                                                <button class="btn btn-danger note-icon-trash" onclick="payDestroy('{{ $pays->id }}'); return false"></button>
                                            </td>
                                            <td>{{ $pays->id }}</td>
                                            <td>{{ $pays->user->firstname }} {{ $pays->user->lastname }} {{ $pays->user->names }}</td>
                                            <td>{{ $pays->type->description }}</td>
                                            <td>{{ $pays->category->description }}</td>
                                            <td>{{ $pays->description }}</td>
                                          
                                            <td>{{ $pays->money }}</td>
                                            <td>{{ $pays->igv }}</td>
                                            <td>{{ $pays->cantidad }}</td>
                                            <td>{{ $pays->money * $pays->cantidad + ($pays->igv  )  }}</td>
                                            <td>{{ $pays->constancia }}</td>
                                            <td>{{ $pays->date_solicitud }}</td>
                                            <td>{{ $pays->date_recepcion }}</td>
                                            
                                       

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

