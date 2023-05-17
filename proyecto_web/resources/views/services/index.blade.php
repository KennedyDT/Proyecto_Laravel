@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Tabla de servicios</h1>
        @can('admin.services.create')
            <a href="{{ route('services.create') }}" class="btn btn-primary mb-3">Crear nuevo servicio</a>
        @endcan
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cliente</th>
                    <th>Descripción</th>
                    <th>Nombre del operario</th>
                    <th>Cargo del operario</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_services as $service)
                    <tr>
                        <td>{{ $service->id }}</td>
                        <td>{{ $service->user->name }}</td>
                        <td>{{ $service->description }}</td>
                        <td>{{ $service->operator->name }}</td>
                        <td>{{ $service->operator->post }}</td>
                        <td>{{ $service->date }}</td>
                        <td>{{ $service->status }}</td>
                        <td>
                            <a href="{{ route('services.edit', $service->id) }}" class="btn btn-primary">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ url('/home') }}" class="btn btn-secondary">Regresar</a>
    </div>
@endsection
