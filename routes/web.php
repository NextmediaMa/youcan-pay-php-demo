<?php

use App\Http\Controllers\SetKeysController;
use App\Http\Controllers\Standalone;
use App\Http\Controllers\Widget;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'home')
    ->name('home');

Route::prefix('widget')->name('widget.')->group(function () {
    Route::get('/show', Widget\ShowFormController::class)
        ->name('show');
    Route::post('/verify', Widget\VerifyPaymentController::class)
        ->name('verify');
});

Route::prefix('standalone')->name('standalone.')->group(function () {
    Route::get('/show', Standalone\ShowFormController::class)
        ->name('show');
    Route::get('/callback', Standalone\CallbackController::class)
        ->name('callback');
});

Route::post('set-keys', SetKeysController::class)
    ->name('set_keys');
