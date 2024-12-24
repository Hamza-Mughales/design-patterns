<?php

namespace App\Services\StrategyPattern;

class PayPalGateway implements PaymentGatewayInterface
{
    public function pay(float $amount): string
    {
        // Simulate PayPal payment processing
        return "Paid {$amount} using PayPal.";
    }
}
