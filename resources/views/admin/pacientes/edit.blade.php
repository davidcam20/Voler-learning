@extends('layouts.main',['bodyClass' => 'admin-dashboard', 'pageTitle' => 'Editar Paciente '. $paciente->first_name.' '.$paciente->last_name])

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Editar Paciente</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('pacientes.index') }}">Pacientes</a></li>
                            <li class="breadcrumb-item active">Editar Paciente</li>
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
                    <!-- left column -->
                    <div class="col-md-8">
                        <!-- jquery validation -->
                        <div class="card">
                            <!-- /.card-header -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div><br />
                        @endif
                            <!-- form start -->
                            <form id="quickForm" action="{{ route('pacientes.update', $paciente->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="first_name">Nombre</label>
                                        <input type="text" name="first_name" class="form-control" value="{{ $paciente->first_name }}" id="first_name" placeholder="Nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="last_name">Apellidos</label>
                                        <input type="text" name="last_name" class="form-control" value="{{ $paciente->last_name }}" id="last_name" placeholder="Apellidos">
                                    </div>
                                    <div class="form-group">
                                        <label for="birthday">Fecha Nacimiento</label>
                                        <input type="date" name="birthday" class="form-control datetimepicker-input" value="{{ $paciente->birthday }}" id="birthday" placeholder="Fecha Nacimiento">
                                    </div>
                                    <div class="form-group">
                                        <label for="school">Nombre Escuela</label>
                                        <input type="text" name="school" class="form-control" value="{{ $paciente->school }}" id="school" placeholder="Nombre Escuela">
                                    </div>
                                    <div class="form-group">
                                        <label for="level">Nivel que Cursa</label>
                                        <input type="text" name="level" class="form-control" value="{{ $paciente->level }}" id="school" placeholder="Nivel que Cursa">
                                    </div>
                                    <div class="form-group">
                                        <label for="parent_guardian_name">Nombre Encargado</label>
                                        <input type="text" name="parent_guardian_name" class="form-control" value="{{ $paciente->parent_guardian_name }}" id="parent_guardian_name" placeholder="Nombre Encargado">
                                    </div>
                                    <div class="form-group">
                                        <label for="parent_guardian_email">Email Encargado</label>
                                        <input type="email" name="parent_guardian_email" class="form-control" value="{{ $paciente->parent_guardian_email }}" id="parent_guardian_email" placeholder="Email Encargado">
                                    </div>
                                    <div class="form-group">
                                        <label for="parent_guardian_phone">Teléfono Encargado</label>
                                        <input type="text" name="parent_guardian_phone" class="form-control" value="{{ $paciente->parent_guardian_phone }}" id="parent_guardian_phone" placeholder="Teléfono Encargado">
                                    </div>
                                    <div class="form-group">
                                        <label for="location">Lugar de Atención</label>
                                        <select name="location_id" class="form-control" id="location">
                                            <option>Seleccione</option>
                                            <option value="1" <?php echo ($paciente->location_id == 1) ? 'selected' : ''; ?>>Paraíso</option>
                                            <option value="2" <?php echo ($paciente->location_id == 2) ? 'selected': ''; ?>>Curridabat</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="parent_guardian_phone">Objetivos</label>
                                        <textarea name="objetives" class="form-control">{{$paciente->objetives}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Foto</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Escoger Archivo</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
