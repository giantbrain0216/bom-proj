<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\RequestTrait;

class PerthController extends Controller
{
    //
    use RequestTrait;

    public function index()
    {

        $perth = "http://reg.bom.gov.au/fwo/IDW60901/IDW60901.94608.json";

        $all_data = $this->getWeatherData($perth);
        $currentTemperature = $this->getCurrentTemperature($all_data);
        $currentWind = $this->getCurrentWind($all_data);
        $currentWindDirection = $this->getCurrentWindDirection($all_data);
        $currentRelativeHumidity = $this->getCurrentRelativeHumidity($all_data);
        $rain= $this->getRainTrace($all_data);

        $lava = $this->createChart($all_data);



        return view('/perth')->with(array(
            'currentTemperature' =>$currentTemperature,
            'currentWind'=>$currentWind,
            'currentWindDirection'=>$currentWindDirection,
            'currentRelativeHumidity' =>$currentRelativeHumidity,
            'rain'=>$rain,
            "lava"=>$lava));
    }
}
