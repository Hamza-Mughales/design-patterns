<?php

namespace App\Services\StrategyAndAdapterTogether;

interface PaymentGatewayInterface
{
    public function charge(float $amount): string;
}
