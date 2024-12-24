<?php

namespace App\Services\StrategyAndAdapterTogether\Adapters;

use App\Services\StrategyAndAdapterTogether\PaymentGatewayInterface;
use App\Services\StrategyAndAdapterTogether\Adaptees\Stripe;

class StripeAdapter implements PaymentGatewayInterface
{
    private Stripe $stripe;

    public function __construct(Stripe $stripe)
    {
        $this->stripe = $stripe;
    }

    public function charge(float $amount): string
    {
        return $this->stripe->processPayment($amount);
    }
}
