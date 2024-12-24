<?php

namespace App\Http\Controllers\DecoratorPattern;

use App\Http\Controllers\Controller;
use App\Services\DecoratorPattern\BaseProduct;
use App\Services\DecoratorPattern\GiftWrapping;
use App\Services\DecoratorPattern\ExtendedWarranty;

class ProductController extends Controller
{
    public function calculatePrice()
    {
        // Base product with a price of $100
        $product = new BaseProduct(100);
        // dd($product);

        // Add gift wrapping
        $productWithGiftWrapping = new GiftWrapping($product);
        // dd($productWithGiftWrapping->calculate());

        // Add extended warranty
        $productWithWarrantyAndWrapping = new ExtendedWarranty($productWithGiftWrapping);
        // dd($productWithWarrantyAndWrapping);

        // Calculate the final price
        $finalPrice = $productWithWarrantyAndWrapping->calculate();

        return response()->json([
            'final_price' => $finalPrice,
        ]);
    }
}
