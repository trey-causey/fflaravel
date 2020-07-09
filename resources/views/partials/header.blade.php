{{--<nav class="navbar navbar-expand navbar-dark bg-primary">--}}
<nav class="navbar navbar-expand navbar-dark>
    <a href="#" class="navbar-brand" ><img src="{{ URL::to('/img/main/ff_white1.png') }}" id="mainlogo" alt="main formula fantasy logo" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Blog<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('races.circuit') }}">Races</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.administration') }}">Admin</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
            <input class="form-control" type="text" placeholder="Search">
        </form>
    </div>
</nav>
</hr class="hrdivider" >




