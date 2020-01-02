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


Rout::get('/posts','PostsController@index');
Rout::get('/posts/create','PostsController@create');
Rout::post('/posts','PostsController@store');
Rout::get('/posts/{id}','PostsController@edit');
Rout::put('/posts/{id}','PostsController@update');
Rout::delet('posts/{id}','PostsController@destroy');