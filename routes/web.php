<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

use App\Http\Controllers\VotesController;
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

// HOME CONTROLLER
Route::get('/', [HomeController::class, 'index'])->name('home');

// USER CONTROLLER
Route::get('/config', [UserController::class, 'config'])->name('config');
Route::post('/user/update', [UserController::class, 'update'])->name('user.update');
Route::post('/user/update-password', [UserController::class, 'updatePassword'])->name('update-password');
Route::post('/user/update-image', [UserController::class, 'updateImage'])->name('update-image');
Route::get('/user/avatar/{filename}', [UserController::class, 'getImage'])->name('user.avatar');
Route::get('/user-card/{id}', [UserController::class, 'showUser'])->name('user-card');
Route::get('/perfil', [UserController::class, 'perfil'])->name('user-card');

// POST CONTROLLER
Route::get('/create-post', [PostController::class, 'create'])->name('create-post');
Route::post('/save-post', [PostController::class, 'save'])->name('save-post');
Route::get('/post/image/{filename}', [PostController::class, 'getImagePost'])->name('post.image');
Route::get('/post-card/{id}', [PostController::class, 'showPost'])->name('post-card');

//COMMENT CONTROLLER
Route::post('/save-comment', [CommentController::class, 'save'])->name('save-comment');
Route::post('/list-comment', [CommentController::class, 'list'])->name('list-comment');



//VOTE CONTROLLER
Route::get('/like/{post_id}',  [VotesController::class, 'like'])->name('save-like');
Route::get('/dislike/{post_id}',  [VotesController::class, 'dislike'])->name('delete-like');
