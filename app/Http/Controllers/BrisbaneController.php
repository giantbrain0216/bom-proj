<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\RequestTrait;


class BrisbaneController extends Controller
{
    //
    use RequestTrait;

    public function index()
    {

        $syd = "http://reg.bom.gov.au/fwo/IDQ60901/IDQ60901.94576.json";

        $all_data = $this->getWeatherData($syd);
        $currentTemperature = $this->getCurrentTemperature($all_data);
        $currentWind = $this->getCurrentWind($all_data);
        $currentWindDirection = $this->getCurrentWindDirection($all_data);
        $currentRelativeHumidity = $this->getCurrentRelativeHumidity($all_data);

        $lava = $this->createChart($all_data);



        return view('/brisbane')->with(array(
            'currentTemperature' =>$currentTemperature,
            'currentWind'=>$currentWind,
            'currentWindDirection'=>$currentWindDirection,
            'currentRelativeHumidity' =>$currentRelativeHumidity,
            "lava"=>$lava));
    }
}
