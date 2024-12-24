<?php

namespace App\Services\StrategyAndAdapterTogether\Adapters;

use App\Services\StrategyAndAdapterTogether\Adaptees\PayPal;
use App\Services\StrategyAndAdapterTogether\PaymentGatewayInterface;

class PayPalAdapter implements PaymentGatewayInterface
{
    private PayPal $payPal;

    public function __construct(PayPal $payPal)
    {
        $this->payPal = $payPal;
    }

    public function charge(float $amount): string
    {
        return $this->payPal->makePayment($amount);
    }
}
