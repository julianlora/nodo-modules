<?php

use Illuminate\Support\Facades\Route;
use Modules\Builder\Http\Controllers\BuilderController;

// Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('builder', [BuilderController::class, 'index'])->name('builder');
// });
