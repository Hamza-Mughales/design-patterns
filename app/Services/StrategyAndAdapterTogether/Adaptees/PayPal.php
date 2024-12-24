<?php

namespace App\Services\StrategyAndAdapterTogether\Adaptees;

class PayPal
{
    public function makePayment(float $amount): string
    {
        // Simulate a PayPal payment process
        return "Paid $amount via PayPal.";
    }
}
