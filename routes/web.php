<?php

use Illuminate\Support\Facades\Route;

/** Decorator Pattern
    *The Decorator Pattern is a structural design pattern used to dynamically extend 
    *the functionality of an object at runtime without altering its structure. 
    *In Laravel, this pattern is often applied when you want to add behavior 
    *to classes without modifying the original class, which aligns well with the principle of open/closed design.
    *
    *Here’s a full example using the Decorator Pattern in a Laravel context. 
    *Suppose you are building an application where users can purchase products, 
    *and you want to calculate the price of a product with optional add-ons (e.g., gift wrapping, extended warranty).
*/
Route::get('/calculate-price-decorator-pattern', [
    App\Http\Controllers\DecoratorPattern\ProductController::class, 
    'calculatePrice'
]);

/** Adapter Pattern
 * The Adapter Pattern is a structural design pattern that allows objects with incompatible interfaces
 *  to work together. It acts as a bridge between two interfaces, enabling you to integrate existing 
 * classes or third-party libraries into your application without altering their source code.

 * In Laravel, the Adapter Pattern can be useful when integrating external APIs or 
 * libraries that don’t conform to your application’s interfaces.
 */
Route::get('/makePayment-adapter-pattern', [
    App\Http\Controllers\AdapterPattern\PaymentController::class, 
    'makePayment'
]);

/** Strategy with adapter patterns together
 * You need to support third-party APIs and want a flexible way 
 * to switch between payment gateways in your system.
 */
Route::get('/makePayment-strategy-and-adapter-patterns', [
    App\Http\Controllers\StrategyAndAdapterTogether\PaymentController::class, 
    'makePayment'
]);

/**
 * The Template Method Design Pattern is a behavioral design pattern that 
 * defines the skeleton of an algorithm in a base class (template) but 
 * allows subclasses to override specific steps of the algorithm without changing its structure.
 * 
 * In Laravel, the Template Method Pattern can be useful when you want to enforce a 
 * specific workflow or process while allowing flexibility in some parts of the implementation.
 */
Route::get('/generateReport-template-method-pattern', [
    App\Http\Controllers\TemplateMethodPattern\GenerateReportController::class, 
    'generateReport'
]);

 