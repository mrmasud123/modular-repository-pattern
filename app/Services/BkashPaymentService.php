<?php

namespace App\Services;

use App\Interfaces\PaymentGatewayInterface;

class BkashPaymentService implements PaymentGatewayInterface {
    
    public function pay($amount){
        return "Paid {$amount} Tk using Bkash";    
    }
    
}