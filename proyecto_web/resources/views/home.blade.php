@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1>Bienvenido a la página principal</h1>

                <div class="d-grid gap-2">
                    @if(Auth::user()->hasRole('Admin'))


                        <a href="{{ url('operators') }}" class="btn btn-primary btn-lg">Operarios</a>

                        <a href="{{ url('productos') }}" class="btn btn-primary btn-lg">Productos</a>

                        <a href="{{ url('services') }}" class="btn btn-primary btn-lg">Servicios</a>

                        <a href="{{ url('usuarios') }}" class="btn btn-primary btn-lg">Usuarios</a>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
