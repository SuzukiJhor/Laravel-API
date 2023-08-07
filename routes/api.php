<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    DashboardController
};

Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])-> name('admin.home');
});

Route::get('/', function() {
    return 'Oi eu sou Goku api';
});
