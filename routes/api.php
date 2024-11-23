<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CepController;

Route::group(['prefix' => 'api', 'middleware' => 'api'], function () {
    Route::post('cepSearch', [CepController::class, 'search'])->name('cepSearch');
});