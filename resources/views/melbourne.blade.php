@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <h1>Melbourne's Weather Observations</h1>
            <h5>Melbourne Olympic Park</h5>

        </div>
        <div class="col-md-6">

            <h4>Current temperature: {{$currentTemperature}}℃</h4>
            <h4>Relative Humidity: {{$currentRelativeHumidity}}%</h4>
        </div>
        <div class="col-md-6">
            <h3>Wind</h3>
            <h4>Current: {{$currentWind}}km/h</h4>
            <h4>Direction: {{$currentWindDirection}}</h4>
        </div>

    </div>
    <div class="row">

        <div id="temps_div" style="width:80%;"></div>
    </div>

    <?= $lava->render('LineChart', 'Temps', 'temps_div'); ?>

@stop