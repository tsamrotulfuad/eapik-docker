<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InovasiController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\Auth\RedirectAuthenticatedUsersController;
use App\Http\Controllers\PohonkinerjaController;
use App\Models\Pohonkinerja;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Login 
Route::get('login', function () {
    if(Auth::check()) {
        return redirect("/redirectAuthUsers");
    }
    return view('login');
})->name('login');

Route::post('login', [LoginController::class, 'authenticate']);
// Logout
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function() {
    // Redirect Login
    Route::get("/redirectAuthUsers", [RedirectAuthenticatedUsersController::class, "home"]);
    // User
    Route::group(['middleware' => 'checkRole:user'], function() {
        Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
        Route::get('/pohonkinerja', [PohonkinerjaController::class, 'index'])->name('user.pohonkinerja');
    });
    // Admin
    Route::group(['middleware' => 'checkRole:admin'], function() {
        Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/admin/inovasi', [InovasiController::class, 'index'])->name('admin.inovasi');
    });
    // Admin
    Route::group(['middleware' => 'checkRole:superadmin'], function() {
        Route::get('/superadmin/dashboard', [SuperadminController::class, 'dashboard'])->name('superadmin.dashboard');
    });
});