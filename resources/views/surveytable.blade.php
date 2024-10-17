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
                                    <th class="sorting">ID</th>
                                    <th class="sorting">Descripción</th>
                                    <th class="sorting">Detalle</th>
                                        <th class="sorting">Tipo</th>
                                    <th class="sorting">Url</th>
                                    <th class="sorting">Reportes</th>
                                    <th class="sorting">Fecha Inicio</th>
                                    <th class="sorting">Fecha Fin</th>
                                    <th><img width="20"
                                            src="https://img1.freepng.es/20180622/aac/kisspng-computer-icons-download-share-icon-nut-vector-5b2d36055f5105.9823437615296896053904.jpg"
                                            alt="" srcset=""></th>
                                </thead>
                                <tbody>
                                    @foreach ($survey as $surveys)
                                        <tr>
                                            <td></td>
                                            <td>{{ $surveys->id }}</td>
                                            <td>{{ $surveys->description }}</td>
                                            <td>{{ $surveys->detail }}</td>
                                              <td>{{ $surveys->type }}</td>
                                            <td> 
                                                <a target="_blank" href="{{url('encuesta/'.$surveys->id)}}"class="nav-link">
                                                    Ver Encuesta
                                                </a>
                                            </td> 
       <td> 
                                                <a target="_blank" href="{{url('reportes/'.$surveys->id)}}"class="nav-link">
                                                    Ver Reporte
                                                </a>
                                            </td> 
                                            <td>{{ $surveys->date_start }}</td>
                                            <td>{{ $surveys->date_end }}</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success note-icon-pencil"
                                                    data-toggle="modal" data-target="#exampleModal"
                                                    onclick="surveyEdit('{{ $surveys->id }}'); Up();  return false"></button>
                                                <!-- <button class="note-icon-pencil" ></button> -->
                                                <a class="btn btn-warning note-icon-pencil"
                                                    onclick="SurveyDetail('{{ $surveys->id }}')"></a>
                                                <!-- <button class="note-icon-pencil" ></button> -->
                                                <button class="btn btn-danger note-icon-trash"
                                                    onclick="surveyDestroy('{{ $surveys->id }}'); return false"></button>
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
