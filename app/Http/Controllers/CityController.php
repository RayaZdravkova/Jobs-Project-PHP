<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function allcities(){
        $city = City::all();
        return view('index.viewcity', [
            'city'=>$city
        ]);
    }
}
