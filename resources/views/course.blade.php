@extends('template')
@section('content')


                            <!-- Content Header (Page header) -->
                            <section class="content-header">
                                <div class="container-fluid">
                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <h1>Cursos</h1>
                                            {{ session('success') }}
                                        </div>
                                        <div class="col-sm-6">
                                            <ol class="breadcrumb float-sm-right">
                                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                                <li class="breadcrumb-item active">Cursos</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div><!-- /.container-fluid -->
                            </section>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal" onclick="New();$('#course')[0].reset();">
                                Agregar
                            </button>
                            <p></p>
                            Buscar
                            <form  name="for"id="show">
                                <input type="text"name="show" class="form-control" style="width: 50%"  onkeydown="courseShow();">
                            </form>

                            <p></p>
                             <!-- /.content -->
                             {{-- {{ $course->onEachSide(5)->links() }} --}}
                            <div id="mycontent">
                                @include("coursetable")
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
                                            <form action="" method="post" role="form" id="course" name="form">
                                                <input type="hidden" name="id" id="id">
                                                {{ csrf_field() }}
                                          Descripción :      <input type="text" name="description" id="description"
                                                    class="form-control">


                                                    Tipo :
                                                    <select name="type" id="type" class="form-control">
                                                        @foreach ($type as $item)
                                                            <option value="{{ $item->id }}">{{ $item->description }}</option>
                                                        @endforeach
                                                    </select>
                                                    Detalle :      <input type="text" name="detail" id="detail"
                                                    class="form-control">
                                                    Nombre de Carpeta de Certificados :      <input type="text" name="folder_certification" id="folder_certification"
                                                    class="form-control">

                                        </div>
                                        <div class="modal-footer">
                                            <input type="button" value="Nuevo" class="btn btn-warning"
                                                onclick="New();$('#course')[0].reset();" name="new">
                                            <input type="button" value="Guardar" class="btn btn-success"id="create"
                                                onclick="courseStore()" name="create">
                                            <input type="button" value="Modificar" class="btn btn-danger"id="update"
                                                onclick="courseUpdate();" name="update">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cerrar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


@endsection
