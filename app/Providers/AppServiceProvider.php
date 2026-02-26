<?php

namespace App\Providers;

use App\Modules\Student\Repositories\StudentRepository;
use App\Modules\Student\Interfaces\StudentRepositoryInterface;
use App\Modules\Teacher\Interfaces\TeacherRepositoryInterface;
use App\Modules\Teacher\Repositories\TeacherRepository;
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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
