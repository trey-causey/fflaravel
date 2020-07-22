
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
                    <img src="{{ $driver->portrait_url }}" id="driverPortrait" class="driverPortrait" height="175px" width="175px"><br>
                    <h5>{{ $driver->first_name . " " . $driver->last_name }}</h5>
                    <h5>{{ $driver->date_of_birth }}</h5>
                </div>
            @endforeach
        </div>
    </div>
    <script>
        function doSomething(cn) {
            var obj = document.getElementsByClassName(cn);
            window.console.log(obj);
        }
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
          console.log('changing');
        };
    </script>
@endsection
