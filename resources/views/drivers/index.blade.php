
@extends('layouts.master')

@section('sidebar')
    @parent
    <p>Test sidebar</p>
@endsection
@section('content')
    <div class="row">
        <div class="column">
            @foreach($drivers as $driver)
                <h5>{{ $driver->first_name }}</h5>
            @endforeach
        </div>
    </div>
@include('drivers.partials.driverFeature')
@endsection
