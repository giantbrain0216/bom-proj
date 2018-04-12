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
    <div>

        <div id="temps_div"></div>
        <?= $lava->render('LineChart', 'Temps', 'temps_div'); ?>

    </div>
    <div id="chart_div"></div>
</div>
</body>


</html>
