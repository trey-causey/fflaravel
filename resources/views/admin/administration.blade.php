
@extends('layouts.master')

@section('sidebar')
    @parent
    <p>Test sidebar</p>
@endsection
@section('content')
    <div class="row">
        <div class="col med 4">
        @foreach($countries as $country)
        <h3> {{ $country->country }}</h3>
        @endforeach
        </div>
    </div>
    @include('admin.partials.addCountryForm')
@endsection

