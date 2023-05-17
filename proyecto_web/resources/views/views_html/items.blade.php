@extends('layouts.app')

@section('content')
    <div class="container">

    <div class="jumbotron">
        <h1>Productos</h1>
    </div>

      <nav  style="--bs-breadcrumb-divider: '>'"; aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Productos</li>
        </ol>
      </nav>

      <div class="d-md-flex-md-end">
          <form action="{{url('/items')}}" method="GET">
            <div class="btn-group">
              <input type="tex" name="busqueda" class="form-control" >
              <input type="submit" name="enviar" class="btn btn-primary" >
              <a href="{{route('descargar-pdf')}}" class="btn btn-danger">Generar listado de productos(pdf)</a>
              
              
            </div>
          </form>
        </div>


      <table class="table table-light">
   
       <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Descripcion</th>
            <th>Cantidad</th>
            <th>Precio</th>
            
        </tr>
         </thead>
  
    <tbody>
        @foreach($data_productos as $producto)
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->Nombre}}</td>
            <td>{{$producto->Marca}}</td>
            <td>{{$producto->Descripcion}}</td>
            <td>{{$producto->Cantidad}}</td>
            <td>{{$producto->Precio}}</td>
            
            
            
        </tr>
        @endforeach
    </tbody>
    </table>

        
      </div>



    </div>

    

@endsection
