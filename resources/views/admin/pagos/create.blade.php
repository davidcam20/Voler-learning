@extends('layouts.main',['bodyClass' => 'admin-dashboard', 'pageTitle' => 'Agregar Pago'])

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Agregar Paciente</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('pagos.index') }}">Pagos</a></li>
                            <li class="breadcrumb-item active">Agregar Pago</li>
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
                            <form id="quickForm" action="{{ route('pagos.store') }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="user_id">Cliente</label>
                                        <select id="user_id" class="combo-signup form-control" name="user_id">
                                            <option>Seleccione</option>
                                            @foreach($clientes as $cliente)
                                                <option value="{{ $cliente->user_id }}"> {{ $cliente->parent_guardian_name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="detail">Detalle</label>
                                        <input type="text" name="detail" class="form-control" id="detail" placeholder="Detalle">
                                    </div>
                                    <div class="form-group">
                                        <label for="total">Monto</label>
                                        <input type="text" name="total" class="form-control" id="total" placeholder="Monto">
                                    </div>
                                    <div class="form-group">
                                        <label for="payment_date">Fecha</label>
                                        <input type="date" name="payment_date" class="form-control" id="payment_date" placeholder="Fecha Pago">
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
