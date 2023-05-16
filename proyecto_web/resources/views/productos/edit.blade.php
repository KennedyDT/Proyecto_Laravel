@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <form method="post" action="{{ url('/productos/' . $productos->id) }}">
            @csrf
            {{ method_field('PATCH') }}
            @include('productos.form')

        </form>

    </div>
@endsection
