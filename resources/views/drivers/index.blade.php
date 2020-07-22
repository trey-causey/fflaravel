
@extends('layouts.master')

@section('sidebar')
    @parent
    <p>Test sidebar</p>
@endsection
@section('content')
    <div class="driverContainer container bg-secondary">
        <div class="row">
            @foreach($drivers as $driver)
                <div class="col-sm-12 col-md-6 col-lg-3" >
                    <img src="{{ $driver->portrait_url }}" id="driverPortrait" class="driverPortrait" height="175px" width="175px"><br>
                    <h6>{{ $driver->first_name . " " . $driver->last_name }}</h6>
                    <h6>{{ "D.O.B.: " . \Carbon\Carbon::parse($driver->date_of_birth)->toFormattedDateString() }}</h6>
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
