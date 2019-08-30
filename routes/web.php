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

Auth::routes();

/*Admin Work Group Route*/
Route::namespace('Admin')->group(function() {

    Route::get('/admin','AdminController@index')->name('admin')->middleware('admin');
    Route::get('/makeAdmin/{id}','MakeAdminController@makeAdmin')->name('makeAdmin');
    Route::delete('/removeUser/{id}','RemoveUserController@removeUser')->name('removeUser');
    Route::get('/viewAllPost/{id}','ViewAllPostController@viewAllPost')->name('viewAllPost');

});
/*User Work Group Route*/
Route::namespace('User')->group(function() {
    Route::get('/home', 'UserController@index')->name('home')->middleware('user');

});
/*Post Work Group Route*/
Route::namespace('Post')->group(function(){
    Route::get('/create','PostController@create')->name('create-post');
    Route::post('/store','PostController@store')->name('store-post');
    Route::put('/edit/{id}','PostController@edit')->name('edit-post');
    Route::put('/update/{id}','PostController@update')->name('update-post');
    Route::delete('/delete/{id}','PostController@delete')->name('delete-post');
});
