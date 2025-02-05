<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/service-request', [ServiceRequestController::class, 'store'])->name('service.request');
