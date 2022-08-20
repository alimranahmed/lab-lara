<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::delete('tasks/{task}', [TaskController::class, 'delete']);
Route::patch('tasks/{taskId}/restore', [TaskController::class, 'restore']);

Route::get('config', function() {
    config()->macro('name', function() {
        return "Al Imran Ahmed";
    });

    return config()->name();
});
