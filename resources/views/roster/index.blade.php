
@extends('layouts.master')

@section('sidebar')
    @parent
    <p>Test sidebar</p>
@endsection
@section('content')

            @foreach($picks as $owner)
                <div class="row-cols-2" ><h6> {{ $owner->teamOwnerId }} </h6></div>
            @endforeach

    <div class="addDriverPickButton" >
        <button type="button">Click Me!</button>
    </div>
    <div class="driverContainer container bg-secondary">
        <div class="row">
            @foreach($drivers as $driver)
                <div class="col-sm-12 col-md-6 col-lg-3" style="font-family: Calibri">
                    <img src="{{ $driver->portraitUrl }}" id="driverPortrait" class="driverPortrait" height="175px" width="175px"><br>
                    <h5>{{ $driver->firsName . " " . $driver->surname }}</h5>
                    <h5>{{ $driver->dateOfBirth }}</h5>
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
