<?php

use App\Http\Controllers\CourseController;


Route::prefix('courses')->group(function() {
    Route::get('/', [CourseController::class, 'index']);
    Route::get('/{id}', [CourseController::class, 'show']);
});