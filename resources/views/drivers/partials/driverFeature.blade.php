<div class="driverFeature">
    <h2>info for driver</h2>
    @foreach($drivers as $driver)
        <h1>{{ $driver->last_name }}</h1>
    @endforeach
</div>
