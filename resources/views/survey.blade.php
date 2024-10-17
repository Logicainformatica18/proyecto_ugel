@extends('template')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Encuestas</h1>
                    {{ session('success') }}
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Encuestas</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
        onclick="New();$('#survey')[0].reset();">
        Agregar
    </button>
    <p></p>

    <!-- /.content -->
    {{-- {{ $survey->onEachSide(5)->links() }} --}}
    <div id="mycontent">
        @include('surveytable')
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
                    <form action="" method="post" role="form" id="survey" name="form">
                        <input type="hidden" name="id" id="id">
                        {{ csrf_field() }}
                        Descripción : <input type="text" name="description" id="description" class="form-control">
                        Tipo
                        <select name="type" id="type" class="form-control">
                            <option value="encuesta">Encuesta</option>
                            <option value="ficha">Ficha</option>
                        </select>
                         Elija visibilidad
                        <select name="state" id="state" class="form-control">
                            <option value="public">Público</option>
                            <option value="private">Privado</option>
                        </select>
                        Fecha Inicio :
                        <input type="date" name="date_start" id="date_start" class="form-control">
                        Fecha Fin :
                        <input type="date" name="date_end" id="date_end" class="form-control">
                        Hora Inicio :
                        <input type="time" name="hour_start" id="hour_start" class="form-control" value="19:00:00">
                        Hora Fin :
                        <input type="time" name="hour_end" id="hour_end" class="form-control"value="22:00:00">
                        Detalle : <input type="text" name="detail" id="detail" class="form-control">

                </div>
                <div class="modal-footer">
                    <input type="button" value="Nuevo" class="btn btn-warning" onclick="New();$('#survey')[0].reset();"
                        name="new">
                    <input type="button" value="Guardar" class="btn btn-success"id="create" onclick="surveyStore()"
                        name="create">
                    <input type="button" value="Modificar" class="btn btn-danger"id="update" onclick="surveyUpdate();"
                        name="update">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
