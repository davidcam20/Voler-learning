@extends('layouts.guest', ['bodyClass' => 'login-page'])
@section('main-content')
    <div class="login-logo">
        <a href="/"><img src="images/voler-logo.png" alt="Voler Logo" class="brand-image" width="100%"></a>
    </div>
<!-- /.login-logo -->
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Recuperar contraseña</p>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="input-group mb-3">
                <input type="email" name="email" value="{{ old('email') }}" class="form-control" required placeholder="Email">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Solicitar nueva contraseña</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
    <!-- /.login-card-body -->
</div>
@endsection
