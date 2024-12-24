<?php

namespace App\Http\Controllers\AdapterPattern;

use App\Http\Controllers\Controller;
use App\Services\AdapterPattern\Adapters\PayPalAdapter;
use App\Services\AdapterPattern\Adapters\StripeAdapter;
use App\Services\AdapterPattern\Adaptees\PayPal;
use App\Services\AdapterPattern\Adaptees\Stripe;

class PaymentController extends Controller
{
    public function makePayment(string $gateway = 'stripe', float $amount = 100)
    {
        $paymentGateway = null;

        if ($gateway === 'paypal') {
            $payPal = new PayPal();
            $paymentGateway = new PayPalAdapter($payPal);
        } elseif ($gateway === 'stripe') {
            $stripe = new Stripe();
            $paymentGateway = new StripeAdapter($stripe);
        }

        if ($paymentGateway) {
            // dd($paymentGateway);
            $result = $paymentGateway->charge($amount);

            return response()->json([
                'message' => $result,
            ]);
        }

        return response()->json([
            'error' => 'Invalid payment gateway',
        ], 400);
    }
}
