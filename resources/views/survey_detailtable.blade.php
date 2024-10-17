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
                                    <th class="sorting">Pregunta</th>
                                    <th class="sorting">Tipo</th>
                                    <th class="sorting">Opciones</th>
                                    <th class="sorting">Lista</th>
                                    <th class="sorting">Obligatorio</th>
                                    <th class="sorting">Título</th>
                                    <th class="sorting">Detalle 1</th>
                                    <th class="sorting">Detalle 2</th>
                                    <th class="sorting">Detalle 3</th>
                                    <th class="sorting">¿Evaluado?</th>
                                    <th class="sorting">Correcto</th>
                                    <th class="sorting">Puntos</th>
      <th class="sorting">Categoria</th>
  <th class="sorting">Enumeración</th>
                                    <th><img width="20"
                                            src="https://img1.freepng.es/20180622/aac/kisspng-computer-icons-download-share-icon-nut-vector-5b2d36055f5105.9823437615296896053904.jpg"
                                            alt="" srcset=""></th>
                                </thead>
                                <tbody>
                                    <?php
                                    $enumeracion = 0;
                                    ?>
                                    @foreach ($survey_detail as $survey_details)
                                        <tr>
                                            <td></td>
                                            {{-- <td>{{ $survey_details->id }}</td> --}}
                                            <td>{{ $enumeracion = $enumeracion + 1 }}</td>
                                            <td>{{ $survey_details->question }}</td>
                                            <td>{{ $survey_details->type }}</td>
                                            <td>
                                                @php
                                                    
                                                    $arrayDatos = json_decode($survey_details->option);
                                                @endphp
                                                @if (is_array($arrayDatos))
                                                    @foreach ($arrayDatos as $index => $valor)
                                                        {{ $valor . ',' }}
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td>{{ $survey_details->selection->description }}</td>
                                            <td>{{ $survey_details->requerid }}</td>
                                            <td>{{ $survey_details->title }}</td>
                                            <td>{{ $survey_details->detail }}</td>
                                            <td>{{ $survey_details->detail_2 }}</td>
                                            <td>{{ $survey_details->detail_3 }}</td>
                                            <td>{{ $survey_details->evaluate }}</td>
                                            <td>{{ $survey_details->correct }}</td>
                                            <td>{{ $survey_details->point }}</td>
   <td>{{ $survey_details->category }}</td>
      <td>{{ $survey_details->enumeration }}</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success note-icon-pencil"
                                                    data-toggle="modal" data-target="#exampleModal"
                                                    onclick="survey_detailEdit('{{ $survey_details->id }}');  return false"></button>


                                                <button class="btn btn-danger note-icon-trash"
                                                    onclick="survey_detailDestroy('{{ $survey_details->id }}'); return false"></button>

                                                <!-- <button class="note-icon-pencil" ></button> -->
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
