<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\UserInterfaceController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\ComponentsController;
use App\Http\Controllers\ExtensionController;
use App\Http\Controllers\PageLayoutController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MiscellaneousController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\RequestPartnerController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\RequestBookerController;
use App\Http\Controllers\ContentManagementController;
use App\Http\Controllers\SettingController;
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
Route::get('/', [DashboardController::class,'dashboardAnalytics'])->name('dashboard-analytics');

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







