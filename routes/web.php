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

Auth::routes();

Route::resource('/admin' , 'Admin\AdminController');

// User page
//Route::resource('/users' , 'Users\UsersController');

Route::get('/users/event', 'UsersController@allEvent');
Route::get('/users', 'UsersController@userHome');
Route::get('/users/detail','UsersController@seeDetail');
//Route::get('/users/home' , 'Users\UsersController@show_home');



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
    return view('welcome');
});


Route::get('/redirect/{provider}', 'SocialAuthFacebookController@redirect');
Route::get('/callback/{provider}', 'SocialAuthFacebookController@callback');



Route::get('imgs/{filename}', function ($filename) {

    $filePath = storage_path() . '/imgs/' . $filename;
    if (!File::exists($filePath)) {
        return response()->view('guest.404', [], 404);
    }
    $fileContents = File::get($filePath);
    $type = File::mimeType($filePath);

    return Response::make($fileContents, 200)->header("Content-Type", $type);
});

Route::get('imgs/{path}/{filename}', function ($path,$filename) {

    $filePath = storage_path() . '/imgs/' . $path . '/' .$filename;
    if (!File::exists($filePath)) {
        return response()->view('guest.404', [], 404);
    }
    $fileContents = File::get($filePath);
    $type = File::mimeType($filePath);

    return Response::make($fileContents, 200)->header("Content-Type", $type);

});