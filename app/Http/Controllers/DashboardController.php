<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\RequestTrait;
use Mapper;

class dashboardController extends Controller
{
    //
    use RequestTrait;

    public function index()
    {
//        TODO: add current temperature when marker is clicked
        Mapper::map(-23.677021, 133.880817, ['zoom' => 4, 'marker'=>false, 'markers' => ['title' => 'Center', 'animation' => 'DROP', 'autoClose' => true], 'clusters' => ['size' => 10, 'center' => true, 'zoom' => 20]]);
        Mapper::informationWindow(-35.281987, 149.128556, 'Canberra', ['open' => false, 'maxWidth'=> 300, 'markers' => ['title' => 'Title']]);
        Mapper::informationWindow(-31.949492, 115.860399, 'Perth', ['open' => false, 'maxWidth'=> 300, 'markers' => ['title' => 'Title']]);
        Mapper::informationWindow(-37.817736, 144.970011, 'Melbourne', ['open' => false, 'maxWidth'=> 300, 'markers' => ['title' => 'Title']]);
        Mapper::informationWindow(-33.852893, 151.210253, 'Sydney', ['open' => false, 'maxWidth'=> 300, 'markers' => ['title' => 'Title']]);
        Mapper::informationWindow(-27.428192, 153.028872, 'Brisbane', ['open' => false, 'maxWidth'=> 300, 'markers' => ['title' => 'Title', ]]);

        return view('/dashboard');
    }
}
