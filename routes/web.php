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

    Route::resource('products', ProductController::class);

    Route::resource('employees', EmployeeController::class);
    Route::get('employees/list', [EmployeeController::class, 'list'])->name('employees.list');
    Route::get('employees/transfer/{id}', [EmployeeController::class, 'transfer'])->name('employees.transfer');

    Route::get('/ppk', [PpkController::class, 'index'])->name('ppk.index');
    Route::get('/wilayah', [WilayahController::class, 'index'])->name('wilayah.index');


    Route::get('/audits', [AuditController::class, 'index'])->name('audits.index');

    Route::resource('profiles', ProfileController::class);

});
