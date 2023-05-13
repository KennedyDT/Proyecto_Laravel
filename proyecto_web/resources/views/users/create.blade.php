@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <h1>Crear Usuario</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div>
                    <label for="name">Nombre:</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}">
                </div>
                <div>
                    <label for="email">Correo electrónico:</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}">
                </div>
                <div>
                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" id="password">
                </div>
                <button type="submit">Crear Usuario</button>
            </form>

        </div>
    </div>

@endsection
