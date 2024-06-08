<?php

use App\Http\Controllers\Api\VerificationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Auth::routes(['verify' => true]);
