@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tabla servicios') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-light">

                        <thead class="thead-light">
                            <tr>
                                <th>id</th>
                                <th>users_name</th>
                                <th>users_plate</th>
                                <th>type_service</th>
                                <th>operators_name</th>
                                <th>fecha</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach($services as $services)
                            <tr>
                                <td>{{$services->id}}</td>
                                <td>{{$services->users_name}}</td>
                                <td>{{$services->users_plate}}</td>
                                <td>{{$services->type_service}}</td>
                                <td>{{$services->operators_name}}</td>
                                <td>{{$services->fecha}}</td>

                            </tr>
                            @endforeach


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
