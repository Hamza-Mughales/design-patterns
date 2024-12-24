<?php

namespace App\Services\AdapterPattern\Adapters;

use App\Services\AdapterPattern\Adaptees\Stripe;
use App\Services\AdapterPattern\PaymentGatewayInterface;

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
