@extends('template')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">

                    <h3>ID : {{ $survey->description }} </h3>
                    <h4>
                        Inicio : {{ $survey->date_start }} - Fin : {{ $survey->date_end }}
                    </h4>
                    {{ session('success') }}
                </div>
                {{-- <div class="col-sm-3">
                                            <ol class="breadcrumb float-sm-right">
                                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                                <li class="breadcrumb-item active">Encuesta Mantenimiento</li>
                                            </ol>
                                        </div> --}}
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Button trigger modal -->
    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
        onclick="New();$('#survey_detail')[0].reset();">
        Agregar Pregunta
    </button> --}}
    <p></p>



    <div class="row mb-2">


        <div class="col col-md-12">

            <form action="" method="post" role="form" id="survey_detail" name="survey_detail">
                <input type="hidden" name="id" id="id">
                {{ csrf_field() }}
                <h2>Pregunta</h2>
                <textarea type="text" name="question" id="question" class="form-control" rows="2px"> </textarea>
                <h2>Detalle</h2>
                <textarea type="text" name="detail" id="detail" class="form-control" rows="2px"> </textarea>
        </div>
        <p></p>
        <div class="col col-md-12">
            <p></p>
        </div>
        <div class="col col-md-3">
            <h2>Tipo de Pregunta</h2>
            <select name="type" id="type" class="form-control">
                <option value="short_answer">Eligir Tipo de Pregunta</option>
                <option value="short_answer">Respuesta Corta</option>
                <option value="multiple_option">Varias Opciones</option>
                <option value="selection">Selección</option>
                <option value="date">Fecha</option>
                <option value="code">Código</option>
                <option value="file">File</option>
                <option value="email">Email</option>
                {{--  <option value="selection">Casillas</option>
               
                <option value="option_date">Fecha</option>
                <option value="option_hour">Hora</option> --}}
            </select>
        </div>


        <div class="col col-md-2">
            <h4>Requerido</h4>
            <input type="radio" name="requerid" id="requerid" value="yes" checked> &nbsp;&nbsp;Sí &nbsp;&nbsp;
            <input type="radio" name="requerid" id="requerid"value="not"> &nbsp;&nbsp;No
        </div>

        <div class="col col-md-2">
            <h4>Evaluado</h4>
            <input type="radio" name="evaluate" id="evaluated" value="yes" checked> &nbsp;&nbsp;Sí &nbsp;&nbsp;
            <input type="radio" name="evaluate" id="evaluated"value="not" checked> &nbsp;&nbsp;No
        </div>
        <div class="col col-md-2">
            <h4>Alternativa correcta</h4>
            <input type="number" value="1" class="form-control">

        </div>
        <div class="col col-md-2">
            <h4>Puntaje o valor dado :</h4>

            <input type="text" name="point" id="point" class="form-control">
        </div>
        <p></p>

        <p></p>

        <div class="col col-md-12">
            <div id="selectionContainer" style="display: none;">
                <h3>Opciones</h3>
                <select name="selection_id" id="selection_id" class="form-control">

                    @foreach ($selection as $item)
                        <option value="{{ $item->id }}">{{ $item->description }}
                        </option>
                    @endforeach
                </select>
                <p></p>

            </div>
        </div>
        <p></p>
        <div class="col col-md-3">
            <div id="radioContainer" style="display: none;">
                <h3>Opciones</h3>
                <input id="count_option"type="number" value="0" class="form-control">
                <p></p>

            </div>
        </div>
        <div class="col col-md-12">
            <div id="dateContainer" style="display: none;">
                <h3>Calendario</h3>
                <input id="date_option"type="date" class="form-control" disabled>
                <p></p>

            </div>
        </div>
        <div class="col col-md-12">
            <div id="fileContainer" style="display: none;">
                <h3>Archivo</h3>
                <input id="file" name="file"type="file" class="form-control" disabled>
                <p></p>

            </div>
        </div>
        <div id="codeContainer" style="display: none;">
            <div class="input-group mb-3">
                <input type="text" class="form-control"placeholder="Código aquí" disabled>
            </div>

        </div>
        <div id="emailContainer" style="display: none;">
            <div class="input-group mb-3">
                <input type="email" class="form-control"placeholder="Email aquí" disabled>
            </div>

        </div>
        <div class="col-md-12">
            <p></p>


            <div id="inputContainer1" style="display: none;">
                <textarea name="option1" id="option1" cols="100%"></textarea>
                <p></p>
            </div>
            <div id="inputContainer2" style="display: none;">
                <textarea name="option2" id="option2" cols="100%"></textarea>
                <p></p>
            </div>
            <div id="inputContainer3" style="display: none;">
                <textarea name="option3" id="option3" cols="100%"></textarea>
                <p></p>
            </div>
            <div id="inputContainer4" style="display: none;">
                <textarea name="option4" id="option4" cols="100%"></textarea>
                <p></p>
            </div>
            <div id="inputContainer5" style="display: none;">
                <textarea name="option5" id="option5" cols="100%"></textarea>
                <p></p>
            </div>
            <div id="inputContainer6" style="display: none;">
                <textarea name="option6" id="option6" cols="100%"></textarea>
                <p></p>
            </div>
            <div id="inputContainer7" style="display: none;">
                <textarea name="option7" id="option7" cols="100%"></textarea>
                <p></p>
            </div>
            <div id="inputContainer8" style="display: none;">
                <textarea name="option8" id="option8" cols="100%"></textarea>
                <p></p>
            </div>
            <div id="inputContainer9" style="display: none;">
                <textarea name="option9" id="option9" cols="100%"></textarea>
                <p></p>
            </div>
            <div id="inputContainer10" style="display: none;">
                <textarea name="option10" id="option10" cols="100%"></textarea>
                <p></p>
            </div>
            <div id="textContainer" style="display: none;">
                <div class="input-group mb-3">
                    <input type="text" class="form-control"placeholder="Texto de respuesta corta" disabled>
                </div>

            </div>
        </div>





    </div>

    <script>
        var countOptionInput = document.getElementById('count_option');

        countOptionInput.addEventListener('input', function() {
            var countOption = parseInt(countOptionInput.value);

            // Ocultar todos los contenedores de texto
            hideAllInputContainers();

            // Mostrar los contenedores de texto según el valor de count_option
            for (var i = 1; i <= countOption; i++) {
                var inputContainer = document.getElementById('inputContainer' + i);
                if (inputContainer) {
                    inputContainer.style.display = 'block';
                }
            }
        });

        function hideAllInputContainers() {
            for (var i = 1; i <= 10; i++) {
                var inputContainer = document.getElementById('inputContainer' + i);
                if (inputContainer) {
                    inputContainer.style.display = 'none';
                }
            }
        }
    </script>



    <h3>Controles</h3>
    {{-- <input type="button" value="Nuevo" class="btn btn-warning" onclick="New();$('#survey_detail')[0].reset();"
        name="new"> --}}
    <input type="button" value="Guardar" class="btn btn-success"id="create" onclick="survey_detailStore()"
        name="create">
    {{-- 
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>  --}}
    </form>




    <script>
        const selectElement = document.getElementById('type');
        const radioContainer = document.getElementById('radioContainer');
        const dateContainer = document.getElementById('dateContainer');
        const codeContainer = document.getElementById('codeContainer');
        const emailContainer = document.getElementById('emailContainer');
        const textContainer = document.getElementById('textContainer');
        const fileContainer = document.getElementById('fileContainer');
        const selectionContainer = document.getElementById('selectionContainer');
        // const radio_option = document.getElementById('radio_option');
        //VALIDAR TIPO DE PREGUNTA
        selectElement.addEventListener('change', function() {
            if (selectElement.value === 'multiple_option') {
                radioContainer.style.display = 'block';

            } else {
                radioContainer.style.display = 'none';
                // Ocultar todos los contenedores de texto
                hideAllInputContainers();
            }

            if (selectElement.value === 'short_answer') {
                textContainer.style.display = 'block';
                //New();$('#survey_detail')[0].reset()
            } else {
                textContainer.style.display = 'none';
            }
            if (selectElement.value === 'selection') {
                selectionContainer.style.display = 'block';

            } else {
                selectionContainer.style.display = 'none';
            }
            if (selectElement.value === 'date') {
                dateContainer.style.display = 'block';

            } else {
                dateContainer.style.display = 'none';
            }
            if (selectElement.value === 'code') {
                codeContainer.style.display = 'block';

            } else {
                codeContainer.style.display = 'none';
            }
            if (selectElement.value === 'file') {
                fileContainer.style.display = 'block';

            } else {
                fileContainer.style.display = 'none';
            }
            if (selectElement.value === 'email') {
                emailContainer.style.display = 'block';

            } else {
                emailContainer.style.display = 'none';
            }
        });

        // radio_option.addEventListener('keydown', function() {

        // });
    </script>


    <p></p>
    <!-- /.content -->
    {{-- {{ $survey->onEachSide(5)->links() }} --}}
    <div id="mycontent">



        @include('survey_detailtable')

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
                    <form action=""name="survey_detail_edit"id="survey_detail_edit">
                        @csrf
                        <input type="hidden" name="id"id="id">
                        Pregunta:
                        <input type="text" class="form-control" name="question_edit" id="question_edit">
                        ¿Evaluado?:
                        <select name="evaluate_edit" id="evaluate_edit"class="form-control">
                            <option value="not">No</option>
                            <option value="yes">Sí</option>
                        </select>
                        Título:
                        <input type="text" class="form-control" name="title_edit" id="title_edit">
                        Detalle 1:
                        <input type="text" class="form-control" name="detail_edit"id="detail_edit">
                        Detalle 2:
                        <input type="text" class="form-control" name="detail_2_edit"id="detail_3_edit">
                        Detalle 3:
                        <input type="text" class="form-control" name="detail_3_edit"id="detail_3_edit">
                        Correcto:
                        <input type="number" class="form-control" name="correct_edit"id="correct_edit">
                        Point:
                        <input type="text" class="form-control" name="point_edit"id="point_edit">

                        Categoria para Reporte:
                        <select name="category_edit" id="category_edit"class="form-control">
                            <option value="all">Todo</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        Enumeración:
                        <select name="enumeration_edit" id="enumeration_edit" class="form-control">
                            @for ($i = 1; $i <= 54; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>

                        <div class="modal-footer">

                            <input type="button" value="Modificar" class="btn btn-danger"id="update"
                                onclick="survey_detailUpdate();" name="update">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
