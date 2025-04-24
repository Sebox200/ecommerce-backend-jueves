@extends('layouts.app')

@section('content')
<div class="container d-flex flex-column align-items-center justify-content-center" style="min-height: 75vh;">
    <div class="text-center mb-5">
        <img src="https://unab.edu.co/wp-content/uploads/2020/03/Img_2368.png"
             alt="Logo UNAB"
             style="height: 250px; max-width: 100%; object-fit: contain; margin-bottom: 20px;">
        
        <h2 class="fw-bold" style="color: #212121; font-size: 2rem;">
            Sistema de Gestión Universitaria
        </h2>
        
        <hr style="width: 60px; border: 2px solid #ff9800; margin: 16px auto 0;">
    </div>
    
    

    <div class="card shadow-sm w-100" style="max-width: 450px;">
        <div class="card-header">
            Iniciar Sesión
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="usuario@unab.edu.co">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                </div>

                <div class="mb-3 form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    <label class="form-check-label" for="remember">
                        Recordar mis datos
                    </label>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <button type="submit" class="btn btn-primary">
                        Ingresar
                    </button>

                    @if (Route::has('password.request'))
                        <a class="text-decoration-none" href="{{ route('password.request') }}" style="color: #ff9800;">
                            ¿Olvidaste tu contraseña?
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

