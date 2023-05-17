@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1>Tabla de productos</h1>
                @can('admin.productos.create')

                    <a href="{{ url('productos/create') }}" class="btn btn-primary">Registrar nuevo producto</a>

                @endcan

            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <form action="{{url('/productos.index')}}" method="GET">
                    <div class="btn-group">
                      <input type="tex" name="busqueda" class="form-control" >
                      <input type="submit" name="enviar" class="btn btn-primary" >
                    </div>
                  </form>
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Marca</th>
                            <th>Descripción</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Acciones</th>
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
                                    @if(Auth::user()->hasRole('Admin'))
                                    <a href="{{ url('/productos/' . $producto->id . '/edit') }}" class="btn btn-primary">
                                        Editar
                                    </a>

                                    <form action="{{ url('/productos/' . $producto->id) }}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar" class="btn btn-danger">
                                    </form>
                                    @endif
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
