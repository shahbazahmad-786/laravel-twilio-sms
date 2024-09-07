<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-sms', [\App\Http\Controllers\SMSController::class, 'sendSMS']);
