<?php

use App\Http\Controllers\Marketing\MarketingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MarketingController::class, 'home']);
