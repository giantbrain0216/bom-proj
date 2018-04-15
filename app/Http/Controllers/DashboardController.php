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

        Mapper::map(-35.281987, 149.128556);


        return view('/dashboard');
    }
}
