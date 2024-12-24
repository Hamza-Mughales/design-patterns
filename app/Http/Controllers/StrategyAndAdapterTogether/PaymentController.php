<?php

namespace App\Http\Controllers\StrategyAndAdapterTogether;

use App\Http\Controllers\Controller;
use App\Services\StrategyAndAdapterTogether\PaymentService;
use App\Services\StrategyAndAdapterTogether\Adapters\PayPalAdapter;
use App\Services\StrategyAndAdapterTogether\Adapters\StripeAdapter;
use App\Services\StrategyAndAdapterTogether\Adaptees\PayPal;
use App\Services\StrategyAndAdapterTogether\Adaptees\Stripe;

class PaymentController extends Controller
{
    public function makePayment(string $gateway = 'paypal', float $amount = 100)
    {
        $paymentGateway = null;

        if ($gateway === 'paypal') {
            $paymentGateway = new PayPalAdapter(new PayPal());
        } elseif ($gateway === 'stripe') {
            $paymentGateway = new StripeAdapter(new Stripe());
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
