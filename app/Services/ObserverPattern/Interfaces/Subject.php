<?php

namespace App\Services\ObserverPattern\Interfaces;

interface Subject
{
    public function attach(Observer $observer): void;
    public function detach(Observer $observer): void;
    public function notify(): void;
}
