<?php

namespace App\Services\ObserverPattern\Observers;

use App\Services\ObserverPattern\Interfaces\Observer;

class WebDashboard implements Observer
{
    public function update(float $temperature, float $humidity, float $pressure): void
    {
        echo "Web Dashboard:\n";
        echo "Temperature: {$temperature}°C\n";
        echo "Humidity: {$humidity}%\n";
        echo "Pressure: {$pressure} hPa\n\n";
    }
}
