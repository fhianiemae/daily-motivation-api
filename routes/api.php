<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotivationController;

Route::get('/motivation/today', [MotivationController::class, 'today']);
