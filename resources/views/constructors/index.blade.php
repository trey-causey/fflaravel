
@extends('layouts.master')

@section('sidebar')
    @parent
    <p>Test sidebar</p>
@endsection
@section('content')
    <div class="row" id="tester">
        <div class="col med 4">
            @foreach($constructors as $constructor)
                <h5> {{ $constructor->name }}</h5>
            @endforeach
        </div>
        <h4>test section</h4>
    </div>

@endsection


