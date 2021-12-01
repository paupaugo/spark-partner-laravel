<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\PageLayoutController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ReferredProfitController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProfitController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;

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

// Main Page Route
// Route::get('/', [DashboardController::class,'dashboardEcommerce'])->name('dashboard-ecommerce')->middleware('verified');
Route::get('/', [DashboardController::class,'dashboardAnalytics'])->name('dashboard-analytics')->middleware('verified');

Auth::routes(['verify' => true]);

/* Route Dashboards */
Route::group(['prefix' => 'dashboard'], function () {
  // Route::get('analytics', [DashboardController::class,'dashboardAnalytics'])->name('dashboard-analytics');
  // Route::get('ecommerce', [DashboardController::class,'dashboardEcommerce'])->name('dashboard-ecommerce');
});
/* Route Dashboards */

/* Route Apps */
Route::group(['prefix' => 'app'], function () {
  Route::get('email', [AppsController::class,'emailApp'])->name('app-email');
});
/* Route Apps */

/* Route Authentication Pages */
Route::group(['prefix' => 'auth'], function () {
  Route::get('login-v1', [AuthenticationController::class,'login_v1'])->name('auth-login-v1');
  Route::get('login-v2', [AuthenticationController::class,'login_v2'])->name('auth-login-v2');
  Route::get('register-v1', [AuthenticationController::class,'register_v1'])->name('auth-register-v1');
  Route::get('register-v2', [AuthenticationController::class,'register_v2'])->name('auth-register-v2');
  Route::get('forgot-password-v1', [AuthenticationController::class,'forgot_password_v1'])->name('auth-forgot-password-v1');
  Route::get('forgot-password-v2', [AuthenticationController::class,'forgot_password_v2'])->name('auth-forgot-password-v2');
  Route::get('reset-password-v1', [AuthenticationController::class,'reset_password_v1'])->name('auth-reset-password-v1');
  Route::get('reset-password-v2', [AuthenticationController::class,'reset_password_v2'])->name('auth-reset-password-v2');
  Route::get('lock-screen', [AuthenticationController::class,'lock_screen'])->name('auth-lock_screen');
});
/* Route Authentication Pages */


  Route::get('profile', [ProfileController::class,'index'])->name('profile')->middleware('verified');
  Route::post('file', [ProfileController::class,'store'])->name('file')->middleware('verified');

  Route::get('location', [LocationController::class,'index'])->name('location')->middleware('verified');
  Route::get('request', [RequestController::class,'index'])->name('request')->middleware('verified');
  Route::get('profit', [ProfitController::class,'index'])->name('profit')->middleware('verified');
  Route::get('report', [ReportController::class,'index'])->name('report')->middleware('verified');
  Route::get('referred-profit', [ReferredProfitController::class,'index'])->name('referred-profit')->middleware('verified');
  Route::get('activity-log', [ActivityLogController::class,'index'])->name('activity-log')->middleware('verified');
  







