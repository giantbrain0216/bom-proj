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

            <div class="col-md-12" style="text-align: center">
                <h1>Weather observations for major cities in Australia</h1>
            </div>
        </div>

        <div class="row">
            <div style="width: 100%; height: 500px;">
                {!! Mapper::render() !!}
            </div>
        </div>

        <div class="row" style="padding: 20px;">
            <div class = "col-md-6">
                <a href="/canberra" class="btn btn-default btn-lg btn-block" role="button">Canberra</a>
                <a href="/sydney" class="btn btn-default btn-lg btn-block" role="button">Sydney</a>
                <a href="/brisbane" class="btn btn-default btn-lg btn-block" role="button">Brisbane</a>
            </div>
            <div class = "col-md-6">
                <a href="/melbourne" class="btn btn-default btn-lg btn-block" role="button">Melbourne</a>
                <a href="/perth" class="btn btn-default btn-lg btn-block" role="button">Perth</a>
            </div>
        </div>


    </div>
</div>
</body>


</html>
