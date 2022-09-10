<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

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
Route::get('template', function () {
    return view('template.base');
});

// ADMIN login
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

// ADMIN
Route::get('/', [HomeController::class, 'showBeranda']);
Route::get('/{status}', [HomeController::class, 'showBeranda']);
Route::get('test-ajax', [HomeController::class, 'testAjax']);

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('list', [HomeController::class, 'showList']);
    Route::resource('user', UserController::class);
    Route::prefix('products')->group(function () {
        Route::resource('pc', ProdukController::class);
        Route::post('pc/filter', [ProdukController::class, 'filter']);
    });
});

//PENJUAL Login
Route::prefix('penjual')->middleware('auth:penjual')->group(function () {
    Route::get('list', [HomeController::class, 'showList']);
    Route::resource('user', UserController::class);
    Route::prefix('products')->group(function () {
        Route::resource('pc', ProdukController::class);
        Route::post('pc/filter', [ProdukController::class, 'filter']);
    });
});


//PEMBELI Login
Route::prefix('pembeli')->middleware('auth:pembeli')->group(function () {
    Route::get('list', [HomeController::class, 'showList']);
    Route::resource('user', UserController::class);
    Route::prefix('products')->group(function () {
        Route::resource('pc', ProdukController::class);
        Route::post('pc/filter', [ProdukController::class, 'filter']);
    });
});

//ECOMMERCE
Route::get('ecommerce', [ClientController::class, 'showHome']);

//SETTING
Route::get('settings', [SettingController::class, 'index']);
Route::post('settings', [SettingController::class, 'store']);