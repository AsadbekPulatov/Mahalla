<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[\App\Http\Controllers\StatisticController::class, 'index']);
Route::get('/statistic',[\App\Http\Controllers\StatisticController::class, 'index'])->name('statistic');
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/people',\App\Http\Controllers\PeopleController::class)->middleware(['auth', 'verified']);




require __DIR__.'/auth.php';
