<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\ClarificationController;
use App\Http\Controllers\Admin\PenerimaManfaatController;
use App\Http\Controllers\Admin\MonitoringHunianController;
use App\Http\Controllers\User\MonitoringMandiriController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;

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

Auth::routes(['verify' => true]);


Route::name('auth.')->group(function () {

  // login route
  Route::get('/', [LoginController::class, 'index'])->name('login');

  // register route
  Route::get('/register', [RegisterController::class, 'index'])->name('register');

  // reset password
  Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->name('forgot.password');
});

// Route Admin
Route::name('admin.')->group(function () {

  // dashboard route
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

  // monitoring-hunian route
  Route::get('/monitoring-hunian', [MonitoringHunianController::class, 'index'])->name('monitoring.hunian');

  Route::get('/detail-hunian', [MonitoringHunianController::class, 'detailHunian'])->name('detail.hunian');

  // clarification route
  Route::get('/klarifikasi', [ClarificationController::class, 'index'])->name('clarification');

  // penerima-manfaat route
  Route::get('/penerima-manfaat', [PenerimaManfaatController::class, 'index'])->name('penerima.manfaat');

  Route::get('/profile-penerima-manfaat', [PenerimaManfaatController::class, 'profile'])->name('profile.penerima.manfaat');
}); // End Route Admin


// Route User
Route::name('user.')->group(function () {

  // dashboard route
  Route::get('/user-dashboard', [UserDashboardController::class, 'index'])->name('dashboard');

  // monitoring mandiri route
  Route::get('/monitoring-mandiri', [MonitoringMandiriController::class, 'index'])->name('monitoring.mandiri');

  // profile penerima manfaat
  Route::get('/profile-pm', [UserDashboardController::class, 'profilePenerimaManfaat'])->name('profile.penerima.manfaat');

  // bantuan
  Route::get('/help', [UserDashboardController::class, 'help'])->name('help');
}); // End Route User


// home route
// Route::get('/home', [HomeController::class, 'root'])->name('root');

// customers route
Route::get('/customers', [App\Http\Controllers\CustomerController::class, 'index'])->name('customers.list');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);
