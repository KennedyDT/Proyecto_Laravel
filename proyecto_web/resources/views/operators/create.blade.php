@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row">
        <form action="{{ url('/operators') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('operators.form')


        </form>
    </div>
</div>

@endsection


