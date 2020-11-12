<?php

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

//非ログインユーザーはトップページを表示
Route::get('/', 'IndexController@index')->name('index');

// Route::get('/', function () {
//     return view('welcome');
// });

//ユーザーページを表示
// Route::get('user/{id}', function ($id) {
//   return view('mypage');

// })->name('users.show');

//[login] mypage：マイページ
Route::resource('mypage', 'MypageController')->only([
  'index', 'store', 'edit', 'update'
]);

//[login] products:作品情報投稿
Route::resource('products', 'ProductsController')->only([
  'create', 'index', 'store', 'show',
]);
Route::get('products/{id}', 'ProdustsController@show')->name('pages.posts.show');


//[login] posts:制作工程投稿
Route::resource('posts', 'PostsController')->only([
  'create', 'index', 'store'
]);
//[login] posts:制作工程投稿
// Route::get('posts/{posts_products_id}', 'PostsController@index')->name('pages.posts.index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/home', 'MypageController@index')->name('home');

