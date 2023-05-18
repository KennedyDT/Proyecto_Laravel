@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1>Tabla de productos</h1>
               

            </div>
        </div>
        

        <div class="row">
            <div class="col-12">
              
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Marca</th>
                            <th>Descripción</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_productos as $producto)
                            <tr>
                                <td>{{ $producto->id }}</td>
                                <td>{{ $producto->Marca }}</td>
                                <td>{{ $producto->Descripcion }}</td>
                                <td>{{ $producto->Cantidad }}</td>
                                <td>{{ $producto->Precio }}</td>
                                <td>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <a href="{{ url('/home') }}" class="btn btn-secondary">Regresar</a>
    </div>
@endsection
