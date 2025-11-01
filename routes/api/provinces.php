<?php

use App\Http\Controllers\Region\ProvinceController;
use Illuminate\Support\Facades\Route;

Route::prefix('provinces')->group(function () {
    Route::get('/', [ProvinceController::class, 'index']);
})
    ->middleware('auth:sanctum');
