<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/config', [UserController::class, 'config'])->name('config');
Route::post('/user/update', [UserController::class, 'update'])->name('user.update');
Route::post('/user/update-password', [UserController::class, 'updatePassword'])->name('update-password');
Route::post('/user/update-image', [UserController::class, 'updateImage'])->name('update-image');
Route::get('/user/avatar/{filename}', [UserController::class, 'getImage'])->name('user.avatar');
