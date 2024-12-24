<?php

namespace App\Services\AdapterPattern\Adaptees;

class PayPal
{
    public function makePayment(float $amount): string
    {
        // Simulate a PayPal payment process
        return "Paid $amount via PayPal.";
    }
}
