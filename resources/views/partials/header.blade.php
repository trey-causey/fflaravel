{{--<nav class="navbar navbar-expand navbar-dark bg-primary">--}}
<nav class="navbar navbar-expand">
    <a class="navbar-brand" href="{{ route('home') }}" ><img src="{{ URL::to('/img/main/ff_white1.png') }}" id="mainlogo" alt="main formula fantasy logo" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Blog<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('roster.index') }}">Draft</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('races.circuit') }}">Races</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('drivers.index') }}">Drivers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.administration') }}">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('constructors.index') }}">Constructors</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('scoring.index') }}">Scoring</a>
            </li>
        </ul>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>
</hr class="hrdivider" >




