<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DBController;

Route::get('/', [DBController::class, 'showUsers']);
