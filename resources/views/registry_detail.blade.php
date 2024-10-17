@extends('template')
@section('content')


                            <!-- Content Header (Page header) -->
                            <section class="content-header">
                                <div class="container-fluid">
                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <h1>Registro  : <b>{{$registry_id}}</b>   - Curso <b> {{$registry->course->description}}</b>
                                                - Edición <b>{{$registry->edition}} </b>
                                            </h1>
                                            <h3>ID : <b>  {{$registry->description}}</b>  </h3>

                                            <h3>
                                                 Frecuencia : {{$registry->schedule->description}}
                                            </h3>
                                            <h4>
                                                Hora Inicio : <b>{{$registry->hour_start}}</b> - Hora Fin : <b>{{$registry->hour_end}}</b>
                                            </h4>
                                            <h4>
                                                Fecha Inicio : <b>{{$registry->fec_start}}</b> - Fecha Fin : <b>{{$registry->fec_end}}</b>
                                            </h4>
                                            {{ session('success') }}
                                        </div>
                                        <div class="col-sm-6">
                                            <ol class="breadcrumb float-sm-right">
                                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                                <li class="breadcrumb-item active">Registros Mantenimiento</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div><!-- /.container-fluid -->
                            </section>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal" onclick="New();$('#registry_detail')[0].reset();">
                                Agregar Estudiante
                            </button>
                            <p></p>
                            Buscar
                            <form  name="for"id="show">
                                <input type="text"name="show" class="form-control" style="width: 50%"  onkeydown="registryShow();">
                            </form>

                            <p></p>
                             <!-- /.content -->
                             {{-- {{ $registry->onEachSide(5)->links() }} --}}
                            <div id="mycontent">



                                @include("registry_detailtable")

                            </div>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Mantenimiento</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="post" role="form" id="registry_detail" name="registry_detail">
                                                <input type="hidden" name="id" id="id">
                                                {{ csrf_field() }}

                                                Estudiantes

                                                <select name="student" id="student" class="form-control">
                                                    @foreach ($student as $item)
                                                        <option value="{{ $item->model_id }}-{{$item->model_type}}-{{$item->role_id}}">{{$item->firstname}} {{$item->lastname}} {{$item->names}} </option>
                                                    @endforeach
                                                </select>

                                        </div>
                                        <div class="modal-footer">
                                            <input type="button" value="Nuevo" class="btn btn-warning"
                                                onclick="New();$('#registry_detail')[0].reset();" name="new">
                                            <input type="button" value="Guardar" class="btn btn-success"id="create"
                                                onclick="registry_detailStore()" name="create">
                                            <input type="button" value="Modificar" class="btn btn-danger"id="update"
                                                onclick="registry_detailUpdate();" name="update">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cerrar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">

                                                                    <p></p>
                                                                    <h5 class="modal-title" id="exampleModalLabel">Calificaciones</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="" method="post" role="form" id="qualification" name="qualification">
                                                                        <input type="hidden" name="id" id="id">
                                                                        {{ csrf_field() }}

                                                                        <h3 id="student_description" >

                                                                        </h3>
                                                                        Nota 1 :
                                                                           <input type="number" name="n1" id="n1"
                                                    class="form-control">
                                                    Nota 2 :      <input type="number" name="n2" id="n2"
                                                    class="form-control">
                                                    Nota 3 :      <input type="number" name="n3" id="n3"
                                                    class="form-control">

                                                                </div>
                                                                <div class="modal-footer">

                                                                    <input type="button" value="Modificar" class="btn btn-success"id="update"
                                                                        onclick="registry_detailUpdate();" name="update">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Cerrar</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
@endsection
