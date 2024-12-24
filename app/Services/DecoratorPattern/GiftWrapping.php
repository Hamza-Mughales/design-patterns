<?php

namespace App\Services\DecoratorPattern;

class GiftWrapping extends ProductPriceDecorator
{
    private float $wrappingPrice = 5.0; // Fixed price for gift wrapping

    public function calculate(): float
    {
        return parent::calculate() + $this->wrappingPrice;
    }
}
