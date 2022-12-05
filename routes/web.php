<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\AdminController;

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




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
    Route::get('/manage-user',[AdminController::class,'manageUser'])->name('manage.user');
});

Route::get('/',[FrontController::class, 'index']);
Route::post('/store',[FrontController::class, 'store'])->name('store');

