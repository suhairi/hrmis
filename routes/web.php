<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PpkController;
use App\Http\Controllers\WilayahController;
use App\Http\Controllers\AuditController;

use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TransferController;

use App\Http\Livewire\UserWizard;

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

Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return  "All cleared...";

});

Route::get('/welcome', function() {
    return view('welcome');
});


Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes(['register' => false, 'reset' => false, 'verify' => false]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('positions', PositionController::class);

    // Products
    Route::resource('products', ProductController::class);

    // Employee
    Route::resource('employees', EmployeeController::class);
    Route::get('employees/list', [EmployeeController::class, 'list'])->name('employees.list');

    // PPK
    Route::get('/ppk', [PpkController::class, 'index'])->name('ppk.index');

    // Wilayah
    Route::get('/wilayah', [WilayahController::class, 'index'])->name('wilayah.index');

    // Audits
    Route::get('/audits', [AuditController::class, 'index'])->name('audits.index');

    // Profiles
    Route::resource('profiles', ProfileController::class);

    // Settings
    Route::get('/settings/trim/employee/name', [SettingsController::class, 'trimmed'])->name('trim.employee.name');

});
