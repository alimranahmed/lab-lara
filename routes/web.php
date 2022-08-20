<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('tasks/{status}', [TaskController::class, 'index']);
