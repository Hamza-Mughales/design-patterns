<?php

namespace App\Services\StrategyPattern;

class StripeGateway implements PaymentGatewayInterface
{
    public function pay(float $amount): string
    {
        // Simulate Stripe payment processing
        return "Paid {$amount} using Stripe.";
    }
}
