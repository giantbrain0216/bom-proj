@extends('master')
{{--TODO: create same layout for major cities--}}
@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Canberra's Weather Observations</h1>
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
        <div class="col-md-12">
            <div id="temps_div"></div>

        </div>
    </div>

    <?= $lava->render('LineChart', 'Temps', 'temps_div'); ?>

@stop