@extends('layouts.app')

@section('content')
    @foreach ($users->roles as $item)
        <div class="container">
            <a href="{{ url($item->name) }}">
                @if ($item->name == 'Encuestador')
                    <div class="card badge-primary" style="background-color:#00cc99">
                        <div class="row">
                            <div class="col-lg-2"
                                style="margin-left: 10px;margin-right: -25px;   align-items: center;display: flex;">
                                <img src="{{ asset('encuestadorr.png') }}" width="100%" alt=""
                                    srcset="" ">
                                            </div>

                                                                <div class="col-lg-10"style="color:black">
                                                                  <p></p>
                                                                    <style>
                                                                        .custom-container {
                                                                            position: relative;
                                                                            top: -7px;
                                                                            /* Ajusta este valor para mover el contenedor hacia arriba */
                                                                        }

                                                                        .custom-container h2,
                                                                        .custom-container .bad {
                                                                            position: relative;
                                                                            top: -7px;
                                                                            /* Ajusta este valor para mover los elementos hacia arriba */
                                                                        }
                                                                    </style>
                                                                    <h2   style="color:white"><b>{{ $item->name }}</b> </h2>
                                                                    <div class="custom-container">

                                                                        <span class="bad">&nbsp;Cargo</span>
                                                                    </div>


                                                                </div>



                                                            </div>
                                                            <!-- /.card-header -->

                                                        </div>
@else
    <div class="card badge-primary" style="background-color:#003399">
                            <div class="row">
                                <div class="col-lg-2"
                                    style="margin-left: 10px;margin-right: -25px;   align-items: center;display: flex;">
                                    <img src="{{ asset('administrador.png') }}" width="100%" alt="" srcset="" ">
                            </div>

                            <div class="col-lg-10"style="color:white">
                                <p></p>
                                <style>
                                    .custom-container {
                                        position: relative;
                                        top: -7px;
                                        /* Ajusta este valor para mover el contenedor hacia arriba */
                                    }

                                    .custom-container h2,
                                    .custom-container .bad {
                                        position: relative;
                                        top: -7px;
                                        /* Ajusta este valor para mover los elementos hacia arriba */
                                    }
                                </style>
                                <h2 style="color:white"><b>{{ $item->name }}</b> </h2>
                                <div class="custom-container">

                                    <span class="bad">&nbsp;Cargo</span>
                                </div>


                            </div>



                        </div>
                        <!-- /.card-header -->

                    </div>
                @endif

            </a>

        </div>
        <p></p>
    @endforeach
@endsection
