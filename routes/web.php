<?php

use App\Http\Controllers\Api\VerificationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::post('/register', [\App\Http\Controllers\Api\AuthController::class, 'register']);
//Route::post('/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);

Route::get('email/verify/{id}', [VerificationController::class, 'verification.verify']); // Make sure to keep this as your route name
Route::get('email/resend', [VerificationController::class, 'verification.resend']);


//Auth::routes(['verify' => true]);
