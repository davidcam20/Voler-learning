@extends('layouts.main',['bodyClass' => 'admin-dashboard', 'pageTitle' => 'Editar Pago'])

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Editar Pago</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('pagos.index') }}">Pagos</a></li>
                            <li class="breadcrumb-item active">Editar Pago</li>
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
                            <form id="quickForm" action="{{ route('pagos.update', $pago->id) }}" method="post">
                                <input type="hidden" name="id" value="<?php echo $pago->id ?>" >
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="user_id">Cliente</label>
                                        <select id="user_id" class="combo-signup form-control" name="user_id">
                                            <option>Seleccione</option>
                                            @foreach($clientes as $cliente)
                                                <option value="{{ $cliente->user_id }}" <?php echo ($pago->user_id == $cliente->user_id) ? 'selected' : ''; ?>> {{ $cliente->parent_guardian_name }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="detail">Detalle</label>
                                        <input type="text" name="detail" class="form-control" value="{{ $pago->detail }}" id="detail" placeholder="Detalle">
                                    </div>
                                    <div class="form-group">
                                        <label for="total">Monto</label>
                                        <input type="text" name="total" class="form-control" id="total" value="{{ $pago->total }}" placeholder="Monto">
                                    </div>
                                    <div class="form-group">
                                        <label for="payment_date">Fecha</label>
                                        <input type="date" name="payment_date" class="form-control"value="{{ $pago->payment_date }}" id="payment_date" placeholder="Fecha Pago">
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
