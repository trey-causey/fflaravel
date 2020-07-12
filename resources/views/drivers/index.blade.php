
@extends('layouts.master')

@section('sidebar')
    @parent
    <p>Test sidebar</p>
@endsection
@section('content')
    <div class="row">
        @foreach($drivers as $driver)
            <h1>{{ $driver->first_name }}</h1>
        @endforeach
    </div>
@include('drivers.partials.driverFeature')
@endsection
