
@extends('layouts.master')

@section('sidebar')
    @parent
    <p>Test sidebar</p>
@endsection
@section('content')
    <div class="row">
        <div class="col med 4">1</div>

    </div>
    @include('admin.partials.addCountryForm')
@endsection

