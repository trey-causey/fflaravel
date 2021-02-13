
@extends('layouts.master')

@section('sidebar')
    @parent
    <p>Test sidebar</p>
@endsection
@section('content')
            <section class="draftContainer container" >
                <table class="table" >
                        <thead>
                    <tr>
                        <th scope="col">Manager</th>
                        <th scope="col">Primary</th>
                        <th scope="col">Secondary</th>
                        <th scope="col">Turbo</th>
                    </tr>
                        </thead>
                    <tbody>
                    @foreach($testPicks as $item)
                        <tr>
                            <th scope="row" id="{{ $item->teamOwnerId }}">{{ $item->pickOrder }} |   {{ $item->handle  }}    |   {{ $item->firstName }}</th>
                            <td class="primaryDriverId" ></td>
                            <td class="secondaryDriverId"></td>
                            <td class="turboDriverId"></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </section>

    <div class="addDriverPickButton" >
        <button type="button" onclick="setRosterSpot(obj)">Click Me!</button>
    </div>
    <div class="driverContainer container bg-secondary">
        <div class="row">
            @foreach($drivers as $driver)
                <div class="col-sm-12 col-md-6 col-lg-3" style="font-family: Calibri">
                    <img src="{{ $driver->portraitUrl }}" id="{{ $driver->code }}" class="driverPortrait" onclick="setDriver(this.id)"><br>
                    <h5>{{ $driver->firsName . " " . $driver->surname }}</h5>
                    <h5>{{ $driver->dateOfBirth }}</h5>
                </div>
            @endforeach

        </div>
    </div>
    <script>
       function setDriver(cn) {
           var driverId = cn;
            var obj = document.getElementById(cn);
            obj.clientHeight = 200;
            obj.clientWidth = 200;
            window.console.log(driverId);
        }
       function selectRoster(cn) {
            var obj = document.getElementsById(cn);
            window.console.log(obj);
        }
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            console.log('changing');
        };
    </script>
@endsection
