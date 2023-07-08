@extends('layouts.guest', ['bodyClass' => 'login-page'])
@section('main-content')
    <div class="login-logo">
            <a href="/"><img src="{{ env('APP_URL') }}/images/voler-logo.png" alt="Voler Logo" class="brand-image" width="100%"></a>
        </div>
    <!-- /.login-logo -->
    <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Login</p>

                @if(Session::has('status'))
                    <p class="alert alert-info">{{ Session::get('status') }}</p>
                @endif
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" value="{{ old('email') }}" required class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email">
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
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="Contraseña">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="mb-1">
                    <a href="{{ route('password.request') }}">Olvide mi contraseña</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
@endsection
