<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SheduleController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LostFoundController;
use App\Http\Controllers\GuardPassController;

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
    return view('homePage.landing_page');
});


Route::get('/lost_found/create', [LostFoundController::class, 'create'])->name('lost_found.create');
Route::post('/lost_found', [LostFoundController::class, 'store'])->name('lost_found.store');
Route::get('/guard_pass/create', [GuardPassController::class, 'create'])->name('guard_pass.create');
Route::post('/guard_pass', [GuardPassController::class, 'store'])->name('guard_pass.store');
Route::get('/guard_pass', [GuardPassController::class, 'index'])->name('guard_pass.index');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/welcome', function () {
        return view('welcome');
    });
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
    
    Route::get('/admin', function () {
        return view('admin.index');
    });   
    
    Route::get('/lost_found', [LostFoundController::class, 'index'])->name('lost_found.index');

});
Route::resource('shedule', SheduleController::class);

Route::middleware(['auth', 'guard'])->prefix('guard')->group(function () {
    Route::get('/dashboard', function () {
        return view('guard.dashboard.index');
    })->name('guard.dashboard');
    Route::get('/shedule', [SheduleController::class, 'index']);        
    Route::get('/profile', function ()
    {
        return view('guard.profile.index');
    });        
});

require __DIR__.'/auth.php';
