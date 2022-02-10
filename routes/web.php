<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/form', [HomeController::class, 'form'])->name('form');
Route::get('/card', [HomeController::class, 'card'])->name('card');
Route::get('/chart', [HomeController::class, 'chart'])->name('chart');
Route::get('/button', [HomeController::class, 'button'])->name('button');
Route::get('/modal', [HomeController::class, 'modal'])->name('modal');
Route::get('/table', [HomeController::class, 'table'])->name('table');
Route::group(['prefix'=>'page','as'=>'page.'], function () {
    Route::get('/login', [HomeController::class, 'login'])->name('login');
    Route::get('/create-account', [HomeController::class, 'create_account'])->name('create_account');
    Route::get('/forgot-password', [HomeController::class, 'forgot_password'])->name('forgot_password');
    Route::get('/404', [HomeController::class, 'page404'])->name('404');
    Route::get('/blank', [HomeController::class, 'blank'])->name('blank');
});

Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
