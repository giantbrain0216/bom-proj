<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\RequestTrait;


class CanberraController extends Controller
{
    use RequestTrait;

    public function index()
    {

        $cbr = "http://reg.bom.gov.au/fwo/IDN60903/IDN60903.94926.json";

        $all_data = $this->getWeatherData($cbr);
        $currentTemperature = $this->getCurrentTemperature($all_data);
        $currentWind = $this->getCurrentWind($all_data);
        $currentWindDirection = $this->getCurrentWindDirection($all_data);
        $currentRelativeHumidity = $this->getCurrentRelativeHumidity($all_data);

        $lava = $this->createChart($all_data);



        return view('/canberra')->with(array(
            'currentTemperature' =>$currentTemperature,
            'currentWind'=>$currentWind,
            'currentWindDirection'=>$currentWindDirection,
            'currentRelativeHumidity' =>$currentRelativeHumidity,
            "lava"=>$lava));
    }

}
