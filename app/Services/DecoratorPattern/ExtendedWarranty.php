<?php

namespace App\Services\DecoratorPattern;

class ExtendedWarranty extends ProductPriceDecorator
{
    private float $warrantyPrice = 20.0; // Fixed price for extended warranty

    public function calculate(): float
    {
        // dd(parent::calculate());
        return parent::calculate() + $this->warrantyPrice;
    }
}
