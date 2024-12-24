<?php

namespace App\Services\strategyPattern;

interface PaymentGatewayInterface
{
    public function pay(float $amount): string;
}
