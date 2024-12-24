<?php

namespace App\Services\StrategyPattern;

class PaymentService
{
    private PaymentGatewayInterface $paymentGateway;

    public function __construct(PaymentGatewayInterface $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function processPayment(float $amount): string
    {
        return $this->paymentGateway->pay($amount);
    }
}
