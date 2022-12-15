<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlternativeController;
use App\Http\Controllers\CalculationController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\WeightController;

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

// Route::get('/', function () {
//     return view('layouts.app');
// });

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login');  
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
  Route::get('/', [HomeController::class, 'index'])->name('home');
  Route::resource('alternatif', AlternativeController::class);
  Route::resource('perhitungan', CalculationController::class);
  Route::resource('kriteria', CriteriaController::class);
  Route::resource('bobot', WeightController::class);

  Route::get('password/change', [AuthController::class, 'changePasswordPage'])->name('password.change');
  Route::post('password/change', [AuthController::class, 'changePasswordAction'])->name('password.change');
  Route::get('profile', [AuthController::class, 'profile'])->name('profile');
});