<?php

use Illuminate\Support\Facades\Route;

/** Decorator Pattern
    The Decorator Pattern is a structural design pattern used to dynamically extend 
    the functionality of an object at runtime without altering its structure. 
    In Laravel, this pattern is often applied when you want to add behavior 
    to classes without modifying the original class, which aligns well with the principle of open/closed design.

    Here’s a full example using the Decorator Pattern in a Laravel context. 
    Suppose you are building an application where users can purchase products, 
    and you want to calculate the price of a product with optional add-ons (e.g., gift wrapping, extended warranty).
*/
Route::get('/calculate-price-decorator-pattern', [
    App\Http\Controllers\DecoratorPattern\ProductController::class, 
    'calculatePrice'
]);
