
@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="trey" >Control Structures</h1>
            @if(true)
                <p>True</p>
            @else
            <p>False</p>
            @endif
            @for($i = 0; $i<5; $i++)
                <p>{{ $i + 1 }}. Iteration</p>
            @endfor
        </div>
    </div>
    <h3 class="test">this is a test</h3>
@endsection

