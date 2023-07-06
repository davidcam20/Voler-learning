@extends('layouts.main',['bodyClass' => 'admin-dashboard', 'pageTitle' => 'Pagos'])

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Pagos</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                            <li class="breadcrumb-item active">Pagos</li>
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
                                        <div class="col-8"><h3 class="card-title">Listado Pagos</h3></div>
                                        <div class="col-4"><a href="{{ route('pagos.create') }}" class="btn btn-info" style="float: right;">Nuevo Pago</a></div>
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
                                        <th>Nombre Cliente</th>
                                        <th>Detalle</th>
                                        <th>Total</th>
                                        <th>Fecha Pago</th>
                                        <th>Opciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($pagos as $pago)
                                        <tr>
                                            <td>{{$pago->user->name}}</td>
                                            <td>{{$pago->detail}}</td>
                                            <td>{{$pago->total}}</td>
                                            <td>{{$pago->payment_date}}</td>
                                            <td><a href="{{route('pagos.edit',$pago->id)}}">Editar</a></td>
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
