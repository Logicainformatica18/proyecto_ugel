@extends('template')
@section('content')


                            <!-- Content Header (Page header) -->
                            <section class="content-header">
                                <div class="container-fluid">
                                    <div class="row mb-2">
                                        <div class="col-sm-6">
                                            <h1>Mi Perfil</h1>
                                            {{ session('success') }}
                                        </div>
                                        <div class="col-sm-6">
                                            <ol class="breadcrumb float-sm-right">
                                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                                                <li class="breadcrumb-item active">Mi Perfil</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div><!-- /.container-fluid -->
                            </section>




                            <p></p>
                             <!-- /.content -->
                             {{-- {{ $student->onEachSide(5)->links() }} --}}
                            <div id="mycontent">
                                @include('student/studenttable')
                            </div>





@endsection
