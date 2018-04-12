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
        for($i = 0; $i < 100; $i++){
            $temperature[] = round($all_data["observations"]["data"][$i]["apparent_t"],1);
            $date[] = $all_data["observations"]["data"][$i]["local_date_time_full"];
        }
//        print_r($date);

        $lava = new Lavacharts;
        $weather = $lava->DataTable();
        $weather->addNumberColumn(' Temp')
            ->addNumberColumn('Data');
        for($i = 0; $i < 100; $i++){
            $weather->addRow([$date[$i],$temperature[$i]]);

        }

        $lava->LineChart('Temps', $weather, [
            'title' => 'Weather in October'
        ]);


        return view('/dashboard')->with(array(
            'temperature' => $temperature,
            'date' => $date,
            "lava"=>$lava));
    }
}
