<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/service-status', function () {
    return view('service_status');
});

Route::post('/service-request', [ServiceRequestController::class, 'store'])->name('service.request');


