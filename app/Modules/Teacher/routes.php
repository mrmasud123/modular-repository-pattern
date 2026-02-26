<?php


use Illuminate\Support\Facades\Route;
use App\Modules\Teacher\Controllers\TeacherController;

Route::get('/teachers', [TeacherController::class, 'index']);