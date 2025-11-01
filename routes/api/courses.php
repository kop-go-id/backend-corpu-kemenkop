<?php

use App\Http\Controllers\CourseController;


Route::prefix('courses')->group(function() {
    Route::get('/', [CourseController::class, 'index']);
    Route::get('/{courseId}', [CourseController::class, 'show']);
    Route::get('/{courseId}/topics', [CourseController::class, 'showTopics']);
});