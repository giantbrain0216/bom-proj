<?php
/**
 * Created by PhpStorm.
 * User: prayatna
 * Date: 14/4/18
 * Time: 01:39
 */

namespace App\Http\Traits;
use GuzzleHttp;
use Khill\Lavacharts\Lavacharts;

trait RequestTrait {

    // functions to reuse by all controller as each controller uses different URL but gets the same information

    public function getWeatherData($url) {

        $client = new GuzzleHttp\Client();
//        $res = $client->request('GET', 'http://reg.bom.gov.au/fwo/IDN60903/IDN60903.94926.json');
        $res = $client->request('GET', $url);

        $all_data = json_decode($res->getBody(), true);

        $temperature= array();
        $date = array();


        for($i = 0; $i < 100; $i++){
            $temperature[] = round($all_data["observations"]["data"][$i]["air_temp"],1);
            $date[] = $all_data["observations"]["data"][$i]["local_date_time_full"];
        }


        return $all_data;

    }

    public function getCurrentTemperature($data){

        $currentTemperature = $data["observations"]["data"][0]["air_temp"];
        return $currentTemperature;

    }

    public function getCurrentWind($data){

        $currentWind = $data["observations"]["data"][0]["wind_spd_kmh"];
        return $currentWind;

    }

    public function getCurrentWindDirection($data){

        $currentWindDirection = $data["observations"]["data"][0]["wind_dir"];
        return $currentWindDirection;

    }


    public function getCurrentRelativeHumidity($data){

        $currentRelativeHumidity = $data["observations"]["data"][0]["rel_hum"];
        return $currentRelativeHumidity;

    }

    public function createChart($data){

        $lava = new Lavacharts;
        $temperature= array();
        $date = array();

        for($i = 0; $i < 100; $i++){
            $temperature[] = round($data["observations"]["data"][$i]["air_temp"],1);
            $date[] = $data["observations"]["data"][$i]["local_date_time_full"];
        }


        $weather = $lava->DataTable();

        $weather->addDateTimeColumn(' Date')
            ->addNumberColumn('Temperature');
        for($i = 0; $i < 100; $i++){
            $weather->addRow([$date[$i],$temperature[$i]]);

        }

        $lava->LineChart('Temps', $weather, [
            'title' => 'Temperature for every 30 minutes'
        ]);


        return $lava;

    }


}