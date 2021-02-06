
@extends('layouts.master')

@section('sidebar')
    @parent
    <p>Test sidebar</p>
@endsection
@section('content')
    <section class="managerContainer" >
        <table class="table" >
            <thead>
             <tr>
                 <th scope="col" >Owner Id</th>
                 <th scope="col" >First Name</th>
                 <th scope="col" >Last Name</th>
                 <th scope="col" >Handle</th>
             </tr>
            </thead>
            <tbody>
            @foreach($managers as $item)
                <tr>
                    <th scope="row" id="{{ $item->teamOwnerId}}">{{ $item->teamOwnerId }} </th>
                    <td class="primaryDriverId" > {{ $item->firstName }}</td>
                    <td class="secondaryDriverId"> {{ $item->lastName }}</td>
                    <td class="turboDriverId"> {{ $item->handle }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
    <script>
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            console.log('changing');
        };
    </script>
@endsection
