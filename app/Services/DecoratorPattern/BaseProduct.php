<?php

namespace App\Services\DecoratorPattern;

class BaseProduct implements ProductPriceInterface
{
    private float $basePrice;

    public function __construct(float $basePrice)
    {
        $this->basePrice = $basePrice;
    }

    public function calculate(): float
    {
        return $this->basePrice;
    }
}
