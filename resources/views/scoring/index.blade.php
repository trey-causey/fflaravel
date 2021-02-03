
@extends('layouts.master')

@section('sidebar')
    @parent
    <p>Test sidebar</p>
@endsection
@section('content')
    <section class="draftContainer container" >
        <div class="scoring-navbar" >
            <div class="dropdown" >
                <button class="dropbtn">Dropdown
                    <i class="fa fa-caret-right"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#">1031</a>
                    <a href="#">1032</a>
                    <a href="#">1033</a>
                    <a href="#">1034</a>
                    <a href="#">1035</a>
                </div>
            </div>

        </div>

        <table class="table" >
            <thead>
            <tr>
                <th scope="col">Team Manager</th>
                <th scope="col">Primary Driver</th>
                <th scope="col">Secondary Driver</th>
                <th scope="col">Turbo Driver</th>
            </tr>
            </thead>
            <tbody>

            @foreach($draftPicks as $item)
                <tr>
                    <th scope="row" id="{{ $item->handle }}">{{ $item->handle }} </th>
                    <td class="primaryDriverId" > {{ $item->primary }}</td>
                    <td class="secondaryDriverId"> {{ $item->secondary }}</td>
                    <td class="turboDriverId"> {{ $item->turbo }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
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
