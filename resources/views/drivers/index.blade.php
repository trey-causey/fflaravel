
@extends('layouts.master')

@section('sidebar')
    @parent
    <p>Test sidebar</p>
@endsection
@section('content')
    <div class="container bg-secondary">
        <div class="row">
            @foreach($drivers as $driver)
                <div class="col-sm-12 col-md-6 col-lg-3" style="font-family: Calibri">
                    <h5>{{ $driver->first_name }}</h5>
                    <h5>{{ $driver->last_name }}</h5>
                    <h5>{{ $driver->date_of_birth }}</h5>
                    <img src="{{ $driver->portrait_url }}" height="200px" width="200px"><br>
                </div>
            @endforeach
        </div>
    </div>
    <script>
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
          console.log('changing');
        };
    </script>
@endsection
