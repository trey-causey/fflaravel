
@extends('layouts.master')

@section('sidebar')
    @parent
    <p>Test sidebar</p>
@endsection
@section('content')
    @include('draft.partials.placeHolder')
    <div class="container bg-secondary" >
        <div class="row">
            <div class="col-sm">1</div>
            <div class="col-sm">2</div>
            <div class="col-sm">3</div>
            <div class="col-sm">4</div>
        </div>

    </div>
    <div class="container" >
        <div class="row">1</div>
    <script>
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            console.log('changing');
        };
    </script>
@endsection
