<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\User;
use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/login', function () {
    return view('auth');
});

Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $user = User::where('name','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
        return view('result')->withDetails($user)->withQuery ( $q );
    else return view ('result')->withMessage('No Details found. Try to search again !');
});


Route::group(['middleware' => ['admin']], function () {
	Route::get('/admin','Admin\HomeController@index');
});


// Route::group(['middleware' => 'admin'], function () {
//   Route::get('/admin', function ()    {
   	
//   });
// });