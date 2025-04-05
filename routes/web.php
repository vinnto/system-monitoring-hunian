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
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\MonitoringMandiriController;

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


// Route Admin

// login route
Route::get('/', [LoginController::class, 'index'])->name('auth.login');

// register route
Route::get('/register', [RegisterController::class, 'index'])->name('auth.register');

// reset password
Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->name('auth.forgot.password');

// dashboard route
Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

// monitoring-hunian route
Route::get('/monitoring-hunian', [MonitoringHunianController::class, 'index'])->name('admin.monitoring.hunian');

Route::get('/detail-hunian', [MonitoringHunianController::class, 'detailHunian'])->name('admin.detail.hunian');

// clarification route
Route::get('/klarifikasi', [ClarificationController::class, 'index'])->name('admin.clarification');

// penerima-manfaat route
Route::get('/penerima-manfaat', [PenerimaManfaatController::class, 'index'])->name('admin.penerima.manfaat');

Route::get('/profile-penerima-manfaat', [PenerimaManfaatController::class, 'profile'])->name('admin.profile.penerima.manfaat');

// End Route Admin


// Route User

// dashboard route
Route::get('/user', [UserDashboardController::class, 'index'])->name('user.dashboard');

// monitoring mandiri route
Route::get('/monitoring-mandiri', [MonitoringMandiriController::class, 'index'])->name('user.monitoring.mandiri');


// End Route User





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
