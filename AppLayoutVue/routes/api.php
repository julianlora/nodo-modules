<?php

use Illuminate\Support\Facades\Route;
use Modules\AppLayoutVue\Http\Controllers\AppLayoutVueController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('applayoutvues', AppLayoutVueController::class)->names('applayoutvue');
});
