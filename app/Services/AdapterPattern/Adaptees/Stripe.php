<?php

namespace App\Services\AdapterPattern\Adaptees;

class Stripe
{
    public function processPayment(float $amount): string
    {
        // Simulate a Stripe payment process
        return "Paid $amount via Stripe.";
    }
}
