<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Weather Chart</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="css/app.css">

</head>
<body>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
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

            <div id="temps_div" style="width:80%;"></div>
        </div>

        <?= $lava->render('LineChart', 'Temps', 'temps_div'); ?>

    </div>
</div>
</body>


</html>
