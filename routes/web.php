<?php

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

Route::get('/w', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'world';
});

Route::get('/', function(){
    return 'Selamat Datang';
});

Route::get('/about', function(){
    return 'NIM : 2241720090';
});

// Route::get('/user/{name}', function($name){
//     return 'Nama Saya '.$name;
// });

Route::get('/posts/{post}/comment/{comment}', function ($postId, $commentId){
    return 'Post ke-'.$postId." Komentar ke-".$commentId;
});

Route::get('/articles/{id}', function($id){
    return 'Halaman Artikel dengan ID '.$id;
});

Route::get('/user/{name?}', function($name='John'){
    return 'Nama saya '.$name;
});

Route::get('/user/profile', function(){
    //
}) -> name('profile');

Route::get(
    '/user/profile',
    [UserProfileController::class, 'show']
) -> name('profile');

//Generating Urls..
$url = route('profile');

//Generating Redirects...
return redirect() -> route('profile');

// Route::get('/posts/{post}/comments/{comment}', function
// ($postId, $commentId) {
//  return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// });







