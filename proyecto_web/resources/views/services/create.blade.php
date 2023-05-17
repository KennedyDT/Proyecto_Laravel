@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row ">
            <div class="col-md-4">
                <h1>Crear servicio</h1>

                <form method="POST" action="{{ route('services.store') }}">
                    @csrf

                    <div class="form-group">
                        <label for="user_id">Usuario:</label>
                        <select name="user_id" id="user_id" class="form-control">
                            <option value="">Seleccionar Usuario</option>
                            @foreach ($data_users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="description">Descripción:</label>
                        <textarea name="description" id="description" class="form-control" rows="4"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="operator_id">Operario:</label>
                        <select name="operator_id" id="operator_id" class="form-control">
                            <option value="">Seleccionar Operario</option>
                            @foreach ($data_operators as $operator)
                                <option value="{{ $operator->id }}">{{ $operator->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="price">Costo del servicio:</label>
                        <input type="integer" name="price" id="price" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="date">Fecha:</label>
                        <input type="date" name="date" id="date" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="status">Estado de la moto:</label>
                        <input type="text" name="status" id="status" class="form-control">
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Crear Servicio</button>
                        <a href="{{ route('services.index') }}" class="btn btn-secondary">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
