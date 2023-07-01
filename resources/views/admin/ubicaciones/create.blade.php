@extends('layouts.main',['bodyClass' => 'admin-dashboard', 'pageTitle' => 'Agregar Ubicación'])

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Agregar Ubicación</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('ubicaciones.index') }}">Ubicaciones</a></li>
                            <li class="breadcrumb-item active">Agregar Ubicación</li>
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
                            <form id="quickForm" action="{{ route('ubicaciones.store') }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Nombre</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="province">Provincia</label>
                                        <select id="province" class="combo-signup form-control" name="province_id">
                                            @foreach($provinces as $province)
                                                <option value="{{ $province->id }}"> {{ $province->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="canton">Cantón</label>
                                        <select id="canton" class="combo-signup form-control" name="canton_id">
                                            @foreach($cantons as $canton)
                                                <option value="{{ $canton->id }}"> {{ $canton->name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="district">Distrito</label>
                                        <select id="district" class="combo-signup form-control" name="district_id">
                                            @foreach($districts as $district)
                                                <option value="{{ $district->id }}">
                                                    {{ $district->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Crear</button>
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
@section('js')
    {{--Scripts--}}
    <script src="/dist/js/ConsultaProvincias.js"></script>
@endsection

