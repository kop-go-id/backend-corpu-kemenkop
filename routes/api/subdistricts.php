<?php

use App\Http\Controllers\Region\SubdistrictController;
use Illuminate\Support\Facades\Route;

Route::prefix('subdistricts')->group(function () {
    Route::get('/{districtCode}', [SubdistrictController::class, 'getSubdistrictByProvinceCode']);
})
    ->middleware('auth:sanctum');
