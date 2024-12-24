<?php

namespace App\Services\AdapterPattern;

interface PaymentGatewayInterface
{
    public function charge(float $amount): string;
}
