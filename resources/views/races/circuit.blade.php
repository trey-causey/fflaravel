
@extends('layouts.master')

@section('sidebar')
    @parent
    <p>Test sidebar</p>
@endsection
@section('content')
    {{ $i = 1 }}
    <div class="row">
        <div class="col med 4">1</div>
        <div class="col med 4">2</div>
        <div class="col med 4">3</div>
        <div class="col med 4">4</div>
        </div>
    @switch($i)
        @case(1)
        @include('races.partials.austria')
        @break

        @case(2)
        @include('races.partials.hungary')
        @break

    @endswitch
@endsection

