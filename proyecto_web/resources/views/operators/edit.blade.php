@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <form method="post" action="{{ url('/operators/' . $operator->id) }}">
            @csrf
            {{ method_field('PATCH') }}
            @include('operators.form')

        </form>

    </div>
@endsection
