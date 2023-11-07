<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    function currentWeather($name='Dhaka'){
        $weatherImages = [
            'clear',
            'sunny',
            'rain',
            'cloudy',
            'fog',
            'mist',
            'snow',
            'storm'
        ];

        $response = Http::get("https://wttr.in/{$name}?format=j1")->json();

        // return $response;

        $_condition = $response['current_condition'][0]['weatherDesc'][0]['value'];

        foreach ($weatherImages as $value) {
            if(strpos(strtolower($_condition), $value) !== false){
                $_condition = $value;
                break;
            }
        }


        $weather  = [
            'temp' => $response['current_condition'][0]['temp_C'],
            'feelsLike' => $response['current_condition'][0]['FeelsLikeC'],
            'condition' => $response['current_condition'][0]['weatherDesc'][0]['value'],
            'weatherImage' => "images/".$_condition.".png",
            'windDirPoint' => $response['current_condition'][0]['winddir16Point'],
            'windSpeed' => $response['current_condition'][0]['windspeedKmph'],
            'pressure' => $response['current_condition'][0]['pressure'],
            'humidity' => $response['current_condition'][0]['humidity'],
            'area' => $response['nearest_area'][0]['areaName'][0]['value'],
            'country' => $response['nearest_area'][0]['country'][0]['value'],
            'date' => date("l, F j, Y")
        ];

        return view('index',compact('weather'));
    }
}
