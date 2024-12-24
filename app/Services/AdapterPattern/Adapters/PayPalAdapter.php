<?php

namespace App\Services\AdapterPattern\Adapters;

use App\Services\AdapterPattern\Adaptees\PayPal;
use App\Services\AdapterPattern\PaymentGatewayInterface;

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
