@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">

                <h1>Editar usuario</h1>

                <form method="post" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    @method('PUT')
                    <label for="name">Nombre:</label>
                    <input type="text" name="name" value="{{ $user->name }}" required>

                    <label for="email">Email:</label>
                    <input type="email" name="email" value="{{ $user->email }}" required>

                    <button type="submit">Guardar cambios</button>
                </form>

            </div>
        </div>
    </div>
@endsection
