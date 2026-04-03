<?php
namespace App\Interfaces;

Interface PaymentGatewayInterface {
    public function pay($amount);
}