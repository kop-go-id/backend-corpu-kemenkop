<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

require __DIR__ . '/api/courses.php';
require __DIR__ . '/api/provinces.php';
require __DIR__ . '/api/districts.php';
require __DIR__ . '/api/subdistricts.php';
require __DIR__ . '/api/villages.php';
