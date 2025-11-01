<?php

use App\Http\Controllers\Region\DistrictController;
use Illuminate\Support\Facades\Route;

Route::prefix('districts')->group(function () {
    Route::get('/{provinceCode}', [DistrictController::class, 'getDistrictByProvinceCode']);
})
    ->middleware('auth:sanctum');
