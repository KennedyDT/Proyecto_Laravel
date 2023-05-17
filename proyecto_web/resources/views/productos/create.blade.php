@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <h1>Crear producto</h1>
        <form action="{{ url('/productos') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('productos.form')


        </form>
    </div>
</div>

@endsection


