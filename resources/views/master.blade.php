<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Weather Observations</title>

    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link href="{{ asset('sass/master.css') }}" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            color: #636b6f;
            font-family: 'Merriweather', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .content {
            text-align: center;
        }


        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .weather-box{
            background-color: #0084b4;
            position: relative;
            width: 30%;
            padding-top: 20%;
        }

        .temp-text {
            position:  absolute;
            top: 20%;
            left:20%;
            text-align: center;
            font-size: 25px;
            color: white;
        }
        .weather-text {
            position:  absolute;
            top: 20%;
            left:20%;
            text-align: center;
            font-size: 15px;
            color: white;
        }
        .rain-box{
            background-color: #1da1f2;
            position: relative;
            width: 15%;
            padding-top: 10%;
        }
        .weather-title{
            text-align: left;
            padding-top:10px;
        }
        .humid-box{
            background-color: #c2d4e1;
            position: relative;
            width: 15%;
            padding-top: 10%;
        }

    </style>
</head>
<body>
    <div class="container content">
        <div>
        @yield('content')
        </div>
    </div>
</body>


</html>
