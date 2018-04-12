<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp;
use Khill\Lavacharts\Lavacharts;

class dashboardController extends Controller
{
    //

    public function index()
    {
        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', 'http://reg.bom.gov.au/fwo/IDN60903/IDN60903.94926.json');

        $all_data = json_decode($res->getBody(), true);

        $temperature= array();
        $date = array();

        $currentTemperature = $all_data["observations"]["data"][0]["air_temp"];
        $currentWind = $all_data["observations"]["data"][0]["wind_spd_kmh"];
        $currentWindDirection = $all_data["observations"]["data"][0]["wind_dir"];
        $currentRelativeHumidity = $all_data["observations"]["data"][0]["rel_hum"];

        for($i = 0; $i < 100; $i++){
            $temperature[] = round($all_data["observations"]["data"][$i]["air_temp"],1);
            $date[] = $all_data["observations"]["data"][$i]["local_date_time_full"];
        }
//        print_r($date);

        $lava = new Lavacharts;
        $weather = $lava->DataTable();
        $weather->addDateTimeColumn(' Date')
            ->addNumberColumn('Temperature');
        for($i = 0; $i < 100; $i++){
            $weather->addRow([$date[$i],$temperature[$i]]);

        }

        $lava->LineChart('Temps', $weather, [
            'title' => 'Temperature for every 30 minutes'
        ]);


        return view('/dashboard')->with(array(
            'temperature' => $temperature,
            'date' => $date,
            'currentTemperature' =>$currentTemperature,
            'currentWind'=>$currentWind,
            'currentWindDirection'=>$currentWindDirection,
            'currentRelativeHumidity' =>$currentRelativeHumidity,
            "lava"=>$lava));
    }
}
