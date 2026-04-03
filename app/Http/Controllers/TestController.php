<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; 
use App\Services\PaymentService;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct(protected PaymentService $payment)
    {
    }

    public function test()
    {
        return [
            $this->payment->pay('bkash',1000),
            $this->payment->pay('nagad', 2000)
        ];
    }
    
    public function valid($age){
        return view('test');
    }
    
    public function submit(Request $request){
        return $request->input();
        return $request->input();
    }
}