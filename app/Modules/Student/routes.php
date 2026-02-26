<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Student\Controllers\StudentController;

Route::prefix('students')->group(function () {
    Route::get('/', [StudentController::class, 'index']);
});