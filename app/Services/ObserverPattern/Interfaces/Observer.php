<?php

namespace App\Services\ObserverPattern\Interfaces;

interface Observer
{
    public function update(float $temperature, float $humidity, float $pressure): void;
}
