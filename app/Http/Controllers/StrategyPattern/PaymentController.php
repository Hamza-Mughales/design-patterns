<?php

namespace App\Http\Controllers\StrategyPattern;

use App\Http\Controllers\Controller;
use App\Services\StrategyPattern\PayPalGateway;
use App\Services\StrategyPattern\StripeGateway;
use App\Services\StrategyPattern\PaymentService;

class PaymentController extends Controller
{
    public function makePayment(string $gateway, float $amount)
    {
        $paymentGateway = null;

        if ($gateway === 'paypal') {
            $paymentGateway = new PayPalGateway();
        } elseif ($gateway === 'stripe') {
            $paymentGateway = new StripeGateway();
        }

        if ($paymentGateway) {
            $paymentService = new PaymentService($paymentGateway);

            $result = $paymentService->processPayment($amount);

            return response()->json([
                'message' => $result,
            ]);
        }

        return response()->json([
            'error' => 'Invalid payment gateway',
        ], 400);
    }
}
