@extends('layouts.main',['bodyClass' => 'admin-dashboard', 'pageTitle' => 'Pacientes'])

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Pacientes</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                            <li class="breadcrumb-item active">Pacientes</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="info">
                                    <div class="row">
                                        <div class="col-8"><h3 class="card-title">Listado Pacientes</h3></div>
                                        <div class="col-4"><a href="{{ route('pacientes.create') }}" class="btn btn-info" style="float: right;">Nuevo Paciente</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Padre o Encargado</th>
                                        <th>Email Padre o Encargado</th>
                                        <th>Lugar Atención</th>
                                        <th>Opciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($pacientes as $paciente)
                                        <tr>
                                            <td>{{$paciente->first_name}} {{$paciente->last_name}}</td>
                                            <td>{{$paciente->parent_guardian_name}}</td>
                                            <td>{{$paciente->parent_guardian_email}}</td>
                                            <td>{{$paciente->location->name}}</td>
                                            <td><a href="{{route('pacientes.edit',$paciente->id)}}">Editar</a></td>
                                        </tr>
                                    @endforeach

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
