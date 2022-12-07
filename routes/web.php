<?php

use App\Http\Controllers\intmarkController;
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

Route::prefix('Intmark')->group(function () {
Route::get('index' , [intmarkController::class , 'index'])->name('index');
Route::get('services' , [intmarkController::class , 'services'])->name('services');
Route::get('workUs' , [intmarkController::class , 'workUs'])->name('workUs');
Route::get('last' , [intmarkController::class , 'last'])->name('last');
Route::get('form' , [intmarkController::class , 'form'])->name('form');
});
