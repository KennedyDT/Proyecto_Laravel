@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <h1>Editar producto</h1>
        <form method="post" action="{{ url('/productos/' . $producto->id) }}">
            @csrf
            {{ method_field('PATCH') }}
            @include('productos.form')

        </form>

    </div>
@endsection
