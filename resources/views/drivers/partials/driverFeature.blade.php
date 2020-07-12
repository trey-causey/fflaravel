<div class="driverFeature">
    <h2>info for driver</h2>
    @foreach($drivers as $driver)
        <div class="row">
            <div class="column">
        <h5>{{ $driver->first_name }}</h5>
        <h5>{{ $driver->last_name }}</h5>
        <h5>{{ $driver->date_of_birth }}</h5><br>
            </div>
            <div class="column">
                <img src="{{ $driver->portrait_url }}" height="300px" width="200px"><br>
            </div>
        </div>
    @endforeach
</div>
