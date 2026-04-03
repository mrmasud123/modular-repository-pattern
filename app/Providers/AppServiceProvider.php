<?php

namespace App\Providers;

use App\Interfaces\PaymentGatewayInterface;
use App\Modules\Student\Repositories\StudentRepository;
use App\Modules\Student\Interfaces\StudentRepositoryInterface;
use App\Modules\Teacher\Interfaces\TeacherRepositoryInterface;
use App\Modules\Teacher\Repositories\TeacherRepository;
use App\Services\BkashPaymentService;
use App\Services\NagadPaymentService;
use app\Services\PaymentService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(StudentRepositoryInterface::class, StudentRepository::class);
        $this->app->bind(TeacherRepositoryInterface::class, TeacherRepository::class);
        
        // $this->app->bind(PaymentGatewayInterface::class, NagadPaymentService::class);
        $this->app->bind('payment',function($gateway){
            return match($gateway){
                'bkash' => new BkashPaymentService(),
                'nagad' => new NagadPaymentService(),
            };
        });
        
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
