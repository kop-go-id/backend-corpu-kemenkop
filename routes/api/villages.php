<?php

use App\Http\Controllers\Region\VillageController;
use Illuminate\Support\Facades\Route;

Route::prefix('villages')->group(function () {
    Route::get('/{subdistrictCode}', [VillageController::class, 'getVillageByProvinceCode']);
})
    ->middleware('auth:sanctum');
