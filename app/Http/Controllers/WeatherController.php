<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Weather;

class WeatherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $weathers = Weather::all();
        return view('weather.index',compact('weathers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $App_key = '439d4b804bc8187953eb36d2a8c26a02';
        $city = $request['city_name'];
       
          $client = new Client(); //GuzzleHttp\Client
          $response = $client->post('https://openweathermap.org/data/2.5/weather?q='.$city.'&appid='.$App_key, [
            
          ]);
            //$response = json_decode((string)$response->getBody());
           

            if($response->getStatusCode()==200){
                Weather::create([
                    'name'=> $city,
                    'properties'=>$response->getBody(),
                ]);
                
                echo "Success";   
                 
            }  else{
                echo "Fail";
            } 
        
       
            return redirect()->route('weather.index');
    }

}
