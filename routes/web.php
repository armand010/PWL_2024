<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;


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

Route::get('/', [HomeController::class, 'index']);

Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/world', function () {
    return 'world';
});

// Route::get('/', function(){
//     return 'Selamat Datang';
// });

Route::get('/about', [AboutController::class, 'about']);

// Route::get('/user/{name}', function($name){
//     return 'Nama Saya '.$name;
// });

Route::get('/posts/{post}/comment/{comment}', function ($postId, $commentId){
    return 'Post ke-'.$postId." Komentar ke-".$commentId;
});

Route::get('/articles/{id}', [ArticleController::class, 'articles']);

Route::get('/user/{name?}', function($name='John'){
    return 'Nama saya '.$name;
});







