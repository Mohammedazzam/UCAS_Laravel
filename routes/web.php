<?php

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
    return view('welcome');
});


//Route::get('/welcome/to/laravel', function () {
//    return 'Welcome';
//});

//Route::get('/welcome/{name}', function () {
//    return 'Welcome!';
//});


//Route::get('/welcome/{name}', function ($name) {
//    return 'Welcome!' . $name;
//});

//Route::get('/welcome/{name}/{age?}', function ($name,$age =10) {
//    return 'Welcome!' . $name .$age;
//});


//Route::get('/welcome/{name}/{age?}', function ($name,$age =10) {
//    echo config('app.timezone');
//    return 'Welcome!' . $name .$age;
//});


Route::get('/timeline','TimelineController@index');


Route::get('/posts/index','PostsController@index')->name('posts')->middleware('verified');
//Route::get('/posts','PostsController@index')->name('posts')->middleware('auth');
Route::get('/posts/create','PostsController@create')->name('posts.create');
Route::post('/posts','PostsController@store')->name('posts.store');
Route::get('/posts/{id}','PostsController@edit')->name('posts.edit');
Route::put('/posts/{id}','PostsController@update')->name('posts.update');
Route::delete('posts/{id}','PostsController@destroy')->name('posts.destroy');


Auth::routes([
//    'register'=>false
       'verify'=> true
]);

Route::get('/home', 'HomeController@index')->name('home');
