<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlternativeController;
use App\Http\Controllers\CalculationController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\WeightController;
use App\Http\Controllers\SelectionController;

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
Route::get('register', [AuthController::class, 'registerPage'])->name('register');
Route::post('register', [AuthController::class, 'registerAction'])->name('register');  
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function () {
  Route::get('/', [HomeController::class, 'index'])->name('home');
  Route::resource('alternatif', AlternativeController::class);
  Route::resource('perhitungan', CalculationController::class);
  Route::resource('kriteria', CriteriaController::class);
  Route::resource('bobot', WeightController::class);

  Route::get('profile', [AuthController::class, 'profile'])->name('profile');
  Route::post('profile/change', [AuthController::class, 'changeProfile'])->name('profile.change');
  Route::post('password/change', [AuthController::class, 'changePassword'])->name('password.change');
  Route::get('seleksi', [SelectionController::class, 'index'])->name('selection');
  Route::get('status', [SelectionController::class, 'result'])->name('selection.result');
  Route::get('info', [SelectionController::class, 'info'])->name('selection.info');
});