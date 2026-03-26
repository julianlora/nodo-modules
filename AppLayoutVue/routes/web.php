<?php

use Illuminate\Support\Facades\Route;
use Modules\AppLayoutVue\Http\Controllers\AppLayoutVueController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('applayoutvues', AppLayoutVueController::class)->names('applayoutvue');
});
