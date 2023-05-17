@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Servicios</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre del Cliente</th>
                    <th>Descripción del Servicio</th>
                    <th>Nombre del Operario</th>
                    <th>Cargo del Operario</th>
                    <th>Fecha</th>
                    <th>Estado del Vehículo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>{{ $service->user->name }}</td>
                        <td>{{ $service->description }}</td>
                        <td>{{ $service->operator->name }}</td>
                        <td>{{ $service->operator->position }}</td>
                        <td>{{ $service->date }}</td>
                        <td>{{ $service->vehicle_status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('services.index') }}" class="btn btn-secondary">Regresar</a>
    </div>
@endsection
