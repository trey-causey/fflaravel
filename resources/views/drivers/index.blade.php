
@extends('layouts.master')

@section('sidebar')
    @parent
    <p>Test sidebar</p>
@endsection
@section('content')
    <div class="row">
    </div>
@include('drivers.partials.driverFeature')
@endsection
