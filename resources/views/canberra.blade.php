@extends('master')
{{--TODO: create same layout for all cities--}}
@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Canberra's Weather Observations</h1>
        </div>

        <div class="col-md-4">
            <p class="weather-title">Rain:</p>
            <div class="rain-box">
                <div class="weather-text">{{$rain}}</div>
            </div>

            <p class="weather-title">Relative Humidity:</p>
            <div class="humid-box">
                <div class="weather-text">{{$currentRelativeHumidity}}%</div>
            </div>
        </div>

        <div class="col-md-4">
            <p class="weather-title">Wind Current:</p>
            <div class="rain-box">
                <div class="weather-text">{{$currentWind}}km/h</div>
            </div>
            <p class="weather-title">Direction:</p>
            <div class="humid-box">
                <div class="weather-text">{{$currentWindDirection}}</div>
            </div>

        </div>

        <div class="col-md-4">
            <p class="weather-title">Current Temperature:</p>
            <div class="weather-box">
                <div class="temp-text">{{$currentTemperature}}℃</div>
            </div>
        </div>
    </div>

        <div class="row">
            <div class="col-md-12" style="padding: 0;">
                <div id="temps_div"></div>
            </div>
        </div>

        <div class="row">
            <a href="/" class="btn btn-default btn-lg " style="position:absolute; bottom:5%; right:50%"
               role="button">Back</a>
        </div>
    <?= $lava->render('LineChart', 'Temps', 'temps_div'); ?>

@stop