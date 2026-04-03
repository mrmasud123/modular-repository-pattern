<?php

namespace App\Services;

use App\Interfaces\PaymentGatewayInterface;

class NagadPaymentService implements PaymentGatewayInterface {
    
    public function pay($amount){
        return "Paid {$amount} Tk using Nagad";    
    }
    
}