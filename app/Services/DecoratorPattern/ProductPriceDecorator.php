<?php

namespace App\Services\DecoratorPattern;

abstract class ProductPriceDecorator implements ProductPriceInterface
{
    protected ProductPriceInterface $productPrice;

    public function __construct(ProductPriceInterface $productPrice)
    {
        $this->productPrice = $productPrice;
    }

    public function calculate(): float
    {
        return $this->productPrice->calculate();
    }
}
