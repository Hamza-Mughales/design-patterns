<?php

namespace App\Http\Controllers\ObserverPattern;

use App\Http\Controllers\Controller;
use App\Services\ObserverPattern\Observers\PhoneDisplay;
use App\Services\ObserverPattern\Observers\WebDashboard;
use App\Services\ObserverPattern\Subjects\WeatherStation;

class ObserverPatternController extends Controller
{
    public function index()
    {        
        // Create a WeatherStation (subject)
        $weatherStation = new WeatherStation();
        
        // Create observers
        $phoneDisplay = new PhoneDisplay();
        $webDashboard = new WebDashboard();
        
        // Attach observers to the weather station
        $weatherStation->attach($phoneDisplay);
        $weatherStation->attach($webDashboard);
        
        // Update weather data
        dump("First Update:\n");
        $weatherStation->setMeasurements(25.5, 65, 1013);
        
        dump("Second Update:\n");
        $weatherStation->setMeasurements(30.2, 70, 1009);
        
        // Detach the phone display and update again
        $weatherStation->detach($phoneDisplay);
        
        dump("Third Update (Phone Display detached):\n");
        $weatherStation->setMeasurements(28.0, 60, 1015);        
    }
}
