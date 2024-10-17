    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">


                        <div class="card-header">
                            <h3 class="card-title">Certificados</h3>


                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <!-- DataTables -->
                            <table id="example1" class="table table-bordered table-striped table-responsive">
                                <thead>
                                    <th ></th>

                                    <th class="sorting">Descripción</th>
                                    <th class="sorting">Curso</th>
                                    <th class="sorting">Estado</th>

                                        <th class="sorting">Docente</th>
                                    <th class="sorting">Detalle</th>

                                        {{-- <th class="sorting">Qr</th> --}}
                                    <th ><img width="20" src="https://img1.freepng.es/20180622/aac/kisspng-computer-icons-download-share-icon-nut-vector-5b2d36055f5105.9823437615296896053904.jpg" alt="" srcset=""></th>
                                </thead>
                                <tbody>
                                    @foreach ($registry_detail as $registry_details)
                                        <tr>
                                            <td></td>

                                             <td>{{ $registry_details->code_certification }}</td>
                                              <td>{{ $registry_details->registry->course->description }}</td>
                                               <td>
    @if ($registry_details->average < 14)
                                                Desaprobado
                                            @else
                                                Aprobado
                                            @endif

                                               </td>

                                               <td>{{$registry_details->registry->model_has_role->teacher->firstname}} {{$registry_details->registry->model_has_role->teacher->last}} {{$registry_details->registry->model_has_role->teacher->names}}  </td>
                                               <td>{{ $registry_details->detail }}</td>

                                               <td>
   <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger"
                                                 onclick="certificationGenerate('{{ $registry_details->id }}','spanish','{{$registry_details->code_certification}}');  return false">Descargar</button>

                                                {{-- <button type="button" class="btn btn-success"onclick="certificationOne('{{ $registry_details->id }}');  return false">Compartir</button> --}}
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

