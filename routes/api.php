<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\VerificationController;
use App\Http\Middleware\EnsureEmailIsVerified;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware(['auth:sanctum', EnsureEmailIsVerified::class]);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])
    ->name('verification.verify')->middleware('signed');


Route::middleware(['auth:sanctum', EnsureEmailIsVerified::class])->group(function () {
    Route::post('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
    Route::post('logout', [AuthController::class, 'logout']);
});
