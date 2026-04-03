<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\TestController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;

Route::get('/', [ChatController::class, 'index']);

Route::post('/send', [ChatController::class, 'sendMessage']);

Route::get('/load-messages/{receiverId}', [ChatController::class, 'loadMessages']);

Route::get('/test', [TestController::class, 'test']);

Route::get('/valid/{age}', [TestController::class, 'valid'])->middleware('validity');
Route::post('/test/submit', [TestController::class, 'submit'])->name('test.submit')->withoutMiddleware(VerifyCsrfToken::class);