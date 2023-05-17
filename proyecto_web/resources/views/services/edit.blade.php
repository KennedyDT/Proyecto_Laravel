@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Editar Servicio</h1>

        <form method="POST" action="{{ route('services.update', $service->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="user_id">Usuario:</label>
                <select name="user_id" id="user_id" class="form-control">
                    <option value="">Seleccionar Usuario</option>
                    @foreach ($data_users as $user)
                        <option value="{{ $user->id }}" @if ($user->id === $service->user_id) selected @endif>{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="description">Descripción:</label>
                <textarea name="description" id="description" class="form-control" rows="4">{{ $service->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="operator_id">Operario:</label>
                <select name="operator_id" id="operator_id" class="form-control">
                    <option value="">Seleccionar Operario</option>
                    @foreach ($data_operators as $operator)
                        <option value="{{ $operator->id }}" @if ($operator->id === $service->operator_id) selected @endif>{{ $operator->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="date">Fecha:</label>
                <input type="date" name="date" id="date" class="form-control" value="{{ $service->date }}">
            </div>

            <div class="form-group">
                <label for="status">Estado de la moto:</label>
                <input type="text" name="status" id="status" class="form-control" value="{{ $service->status }}">
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Actualizar Servicio</button>
                <a href="{{ route('services.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
