@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Editar usuario</h1>

                <form method="post" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" value="{{ $user->email }}" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="roles">Roles:</label>
                        @foreach ($roles as $role)
                            <div class="form-check">
                                <input type="checkbox" name="roles[]" value="{{ $role->id }}" class="form-check-input"
                                    {{ in_array($role->id, $user->roles->pluck('id')->toArray()) ? 'checked' : '' }}>
                                <label class="form-check-label">{{ $role->name }}</label>
                            </div>
                        @endforeach
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                        <a href="{{ route('users.index') }}" class="btn btn-secondary">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
