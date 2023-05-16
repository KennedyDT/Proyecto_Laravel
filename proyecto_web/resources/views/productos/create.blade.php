@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <form action="{{ url('/productos') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('productos.form')


        </form>
    </div>
</div>

@endsection


