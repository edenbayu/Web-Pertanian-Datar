<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\VarietasController;
use App\Http\Controllers\BlogController;
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
    return redirect('/home');
});

Route::get('/home',[HomeController::class, 'index'])->name('home');

Route::get('/signin', function(){
    return view('auth.login');
});

Route::get('/articles', [BlogController::class, 'index']);
Route::post('/articles', [BlogController::class, 'store']);
Route::get('/articles/create', [BlogController::class, 'create']);
Route::get('/articles/{article}', [BlogController::class, 'show']);
Route::get('/articles/{article}/edit', [BlogController::class, 'edit']);
Route::put('/articles/{article}', [BlogController::class, 'update']);

Route::get('/varietas', [VarietasController::class, 'index']);
Route::get('/varietas', [VarietasController::class, 'search'])->name('search');

Route::get('/community',[CommunityController::class, 'index']);
Route::post('/community',[CommunityController::class, 'store']);
Route::delete('/community/{id}',[CommunityController::class, 'destroy']);
Route::get('/community/{id}/edit',[CommunityController::class, 'edit']);
Route::get('/community/{id}/detail/{user_id}',[CommunityController::class, 'show'])->name('show');
Route::put('/community/{id}',[CommunityController::class, 'update']);

Route::post('/community/{id}/detail/{user_id}',[CommunityController::class, 'answer']);
Route::post('/community/{id}/detail/{user_id}/upvote',[CommunityController::class, 'upvote']);
Route::post('/community/{id}/detail/{user_id}/downvote',[CommunityController::class, 'downvote']);

Route::get('/faq',[FaqController::class, 'index']);
Route::get('/tag',[TagController::class, 'index']);
Route::get('/users',[UsersController::class, 'index']);

Route::get('/user/{id}/overview',[UserController::class, 'index']);
Route::get('/user/{id}/listquestion',[UserController::class, 'indexQuestion'])->name('listQ');;

Route::delete('/user/{id}/listquestion/{quest_id}',[UserController::class, 'destroy']);
Route::get('/user/{id}/listarticle',[UserController::class, 'indexArticle']);


Route::get('/setting/{id}',[SettingController::class, 'show']);
Route::put('/setting/{id}',[SettingController::class, 'update']);


Auth::routes();


