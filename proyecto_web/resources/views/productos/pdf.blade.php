@extends('layouts.app')
@section('content')
    <div >
        <div >
            <div >
                <br>
                <h1>Tabla de productos</h1>
               

            </div>
        </div>
        

        <div >
            <div >
              
                <table >
                    <thead >
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
        
    </div>
@endsection
