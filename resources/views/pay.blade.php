@extends('template')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pagos</h1>
                    {{ session('success') }}
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Pagos</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
        onclick="New();$('#pay')[0].reset();">
        Agregar
    </button>
    <p></p>
<div class="row">
    <div class="col-4">
        Usuario :
        <select name="user_option_1" id="user_option_1" class="form-control">
            @foreach ($user as $item)
                <option value="{{ $item->id }}">
                    {{ $item->email }} -- {{ $item->firstname }} {{ $item->lastname }}
                    {{ $item->names }} </option>
            @endforeach
        </select>

    </div>
    <div class="col-4">
        Usuario :
        <select name="user_option_2" id="user_option_2" class="form-control">
            @foreach ($user as $item)
                <option value="{{ $item->id }}">
                    {{ $item->email }} -- {{ $item->firstname }} {{ $item->lastname }}
                    {{ $item->names }} </option>
            @endforeach
        </select>

    </div>
    <div class="col-4">
        Usuario :
        <select name="user_option_3" id="user_option_3" class="form-control">
            @foreach ($user as $item)
                <option value="{{ $item->id }}">
                    {{ $item->email }} -- {{ $item->firstname }} {{ $item->lastname }}
                    {{ $item->names }} </option>
            @endforeach
        </select>

    </div>
    <div class="col-6">
        Fecha Solicitud Inicio :
        <input class="form-control" type="date" name="date_start"id="date_start">
    </div>
    <div class="col-6">
        Fecha solicitud Fin :
        <input class="form-control" type="date" name="date_end"id="date_end">
    </div>
</div>

    <p></p>
    <button type="button" class="btn btn-success"onclick="payCompare()">
        Comparar
    </button>
    <p></p>
    <!-- /.content -->
    {{-- {{ $pay->onEachSide(5)->links() }} --}}
    <div id="mycontent">
        @include('paytable')
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
                    <form action="" method="post" role="form" id="pay" name="form">
                        <input type="hidden" name="id" id="id">
                        {{ csrf_field() }}
                        Descripción : <input type="text" name="description" id="description" class="form-control">
                        <p></p>
                        Usuario :
                        <select name="user_id" id="user_id" class="form-control">
                            @foreach ($user as $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->email }} -- {{ $item->firstname }} {{ $item->lastname }}
                                    {{ $item->names }} </option>
                            @endforeach
                        </select>
                        <p></p>
                       
                        <div class="container">
                            <div class="row ">
                            
                                <div class="col-6">
                                    Plazo de Ejecución :
                                    <select name="type_id" id="type_id" class="form-control">
                                        @foreach ($type as $item)
                                            <option value="{{ $item->id }}">{{ $item->description }}</option>
                                        @endforeach
                                    </select>
                                </div>
                             
                                <div class="col-6">
                                    Usos Diversos :
                                    <select name="category_id" id="category_id" class="form-control">
                                        @foreach ($category as $item)
                                            <option value="{{ $item->id }}">{{ $item->description }}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row ">
                            
                                <div class="col-6">
                                    Tipo Moneda :
                                    <select name="type_money" id="type_money" class="form-control">
                                            <option value="SOLES">Soles</option>
                                            <option value="DOLARES">Dolares</option>
                                            <option value="EUROS">Euros</option>
                                    </select>
                                </div>
                             
                                <div class="col-6">
                                    Ganador Adjudicado :
                                    <select name="ganador" id="ganador" class="form-control">
                                        <option value="NO">NO</option>
                                            <option value="Sí">Sí</option>
                                    </select>
                                    
                                </div>
                            </div>
                        </div>

                        <p></p>
                        Constancia RNP : 
                       <br>
                        <div class="container">
                            <div class="row ">
                                <div class="col">
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="constancia" id="M" value="Sí">
                                    <label class="form-check-label" for="exampleRadios1">
                                        Sí
                                    </label>
                                </div>
                                <div class="col">
                                </div>
                                <div class="col">
                                    <input class="form-check-input" type="radio" name="constancia" id="F" value="NO">
                                    <label class="form-check-label" for="exampleRadios1">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                     
                        <p></p>
                         
                        
                         <div class="container">
                             <div class="row ">
                             
                                 <div class="col-6">
                                    Fecha Solicitud :
                                     <input class="form-control" type="date" name="date_solicitud"id="date_solicitud">
                                 </div>
                              
                                 <div class="col-6">
                                    Fecha Recepción :
                                     <input class="form-control" type="date" name="date_recepcion"id="date_recepcion">
                                     
                                 </div>
                             </div>
                         </div>
                        <p></p>
                        <div class="container">
                            <div class="row ">
                        
                                <div class="col-6">
                                    Precio : <input type="number" name="money" id="money" class="form-control" value="0">
                                </div>
                           
                                <div class="col-6">
                                    Cantidad : <input type="number" name="cantidad" id="cantidad" class="form-control" value="0">
                                </div>
                            </div>
                        </div>
                        <p></p>
                        <div class="container">
                            <div class="row ">
                                <div class="col-6">
                                    IGV : <input type="number" name="igv" id="igv" class="form-control" disabled value="0">
                                 
                                </div>
                                <div class="col-6">
                                    SubTotal : <input type="number" name="subtotal" id="subtotal" class="form-control"value="0" disabled>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <input type="button" value="Nuevo" class="btn btn-warning" onclick="New();$('#pay')[0].reset();"
                        name="new">
                    <input type="button" value="Guardar" class="btn btn-success"id="create" onclick="payStore()"
                        name="create">
                    <input type="button" value="Modificar" class="btn btn-danger"id="update" onclick="payUpdate();"
                        name="update">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
