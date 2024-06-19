<?php

use App\Http\Controllers\Admin\AuthControllers;
use App\Http\Controllers\Admin\DashboardControllers;
use App\Http\Controllers\Admin\SettingControllers;
use App\Http\Controllers\Admin\UserControllers;
use Illuminate\Support\Facades\Route;

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
    return view('home.index');
});

// auth
Route::get('/admin/login', [AuthControllers::class, 'index']);
Route::get('/admin/register', [AuthControllers::class, 'index']);
Route::post('/admin/login', [AuthControllers::class, 'login']);

Route::group(['prefix' => '{slug}', 'as' => 'slug.'], function () {
    // auth
    Route::post('logout', [AuthControllers::class, 'logout']);

    // dashboard
    Route::get('dashboard', [DashboardControllers::class, 'index']);

    // user
    Route::get('profile', [UserControllers::class, 'show']);

    // setting
    Route::get('setting', [SettingControllers::class, 'showSetting']);
    Route::get('subscribe', [SettingControllers::class, 'showSubscribe']);
});
