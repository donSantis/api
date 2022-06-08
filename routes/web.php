<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\NoticesController;
use App\Http\Controllers\RulesController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PerfilCommentController;

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
Route::get('/all-posts', [HomeController::class, 'allPosts'])->name('all-posts');
Route::get('/all-rules', [HomeController::class, 'allRules'])->name('all-rules');
Route::get('/all-notices', [HomeController::class, 'allNotices'])->name('all-notices');
Route::get('/teachers', [HomeController::class, 'teachers'])->name('teachers');
Route::get('/section-partners', [HomeController::class, 'sectionPartners'])->name('section-partners');
Route::get('/career-partners', [HomeController::class, 'allUsers'])->name('career-partners');
Route::get('/devs', [HomeController::class, 'devs'])->name('devs');


// USER CONTROLLER
Route::get('/config', [UserController::class, 'config'])->name('config');
Route::post('/user/update', [UserController::class, 'update'])->name('user.update');
Route::post('/user/update-password', [UserController::class, 'updatePassword'])->name('update-password');
Route::post('/user/update-image', [UserController::class, 'updateImage'])->name('update-image');
Route::get('/user/avatar/{filename}', [UserController::class, 'getImage'])->name('user.avatar');
Route::get('/user-card/{id}', [UserController::class, 'showUser'])->name('user-card');
Route::post('/save-perfil-comment', [PerfilCommentController::class, 'save'])->name('save-perfil-comment');

// POST CONTROLLER
Route::get('/create-post', [PostController::class, 'create'])->name('create-post');
Route::post('/save-post', [PostController::class, 'save'])->name('save-post');
Route::get('/post/image/{filename}', [PostController::class, 'getImagePost'])->name('post.image');
Route::get('/post-card/{id}', [PostController::class, 'showPost'])->name('post-card');
Route::get('/post-delete/{id}', [PostController::class, 'delete'])->name('post-delete');
Route::get('/post-edit/{id}', [PostController::class, 'edit'])->name('post-edit');
Route::post('/post/update', [PostController::class, 'update'])->name('post-update');
//COMMENT CONTROLLER
Route::post('/save-comment', [CommentController::class, 'save'])->name('save-comment');
Route::get('/comment-delete/{id}', [CommentController::class, 'delete'])->name('comment-delete');
//PERFIL COMMENT CONTROLLER
Route::get('/perfil-comment-delete/{id}', [PerfilCommentController::class, 'delete'])->name('perfil-comment-delete');


//RULES CONTROLLER
Route::get('/create-rule', [RulesController::class, 'create'])->name('create-rule');
Route::post('/save-rule', [RulesController::class, 'save'])->name('save-rule');
Route::get('/rule-card/{id}', [RulesController::class, 'showRule'])->name('rule-card');
//NOTICES CONTROLLER
Route::get('/create-notice', [NoticesController::class, 'create'])->name('create-notice');
Route::post('/save-notice', [NoticesController::class, 'save'])->name('save-notice');
Route::get('/notice-card/{id}', [NoticesController::class, 'showNotice'])->name('notice-card');


//VOTE CONTROLLER
Route::get('/like/{post_id}', [VotesController::class, 'like'])->name('save-like');
Route::get('/dislike/{post_id}', [VotesController::class, 'dislike'])->name('delete-like');
