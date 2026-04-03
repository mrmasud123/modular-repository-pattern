<?php

namespace App\Services;

use App\Interfaces\PaymentGatewayInterface;
use Exception;

class PaymentService{
    
   public function handle($gateway){
    
    return match($gateway){
            'bkash' => app(BkashPaymentService::class),
            'nagad' => app(NagadPaymentService::class),
            'default' => throw new Exception("Invalid gateway.")
        };
   }
   
   public function pay($gateway, $amount)
   {
       $service = $this->handle($gateway);

       return $service->pay($amount);
   }

}