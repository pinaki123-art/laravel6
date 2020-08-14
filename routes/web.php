<?php

use Illuminate\Support\Facades\Auth;
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
auth()->loginUsingId(6);

Route::get('/', function () {
    return view('welcome');
});


/**
Route::get('/home', 'HomeController@index')->name('home');

Route::get('conversations', 'ConversationsController@index');
Route::get('conversations/{conversation}', 'ConversationsController@show')->middleware('can:view, conversation');
Route::post('best-replies/{reply}', 'ConversationBestReplyController@store');
Auth::routes();
**/









/*
Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');



Route::get('/', function () {

    $container = new \App\Container();
    $container->bind('example', function (){
        return new \App\Example();
    });

    $example = $container->resolve('example');

    $example->go();

});


use Illuminate\Support\Facades\Route;

Route::get('/logout', function () {
    auth()->logout();
    return 'You are now logged out';
});


Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'welcome');
Route::get('/home', 'HomeController@index')
    ->name('home')
    ->middleware('auth');

Route::get('conversations', 'ConversationsController@index');
Route::get('conversations/{conversation}', 'ConversationsController@show');
//Route::get('payments/create', 'PaymentsController@create')->middleware('auth');
//Route::post('payments', 'PaymentsController@store')->middleware('auth');
//Route::get('notifications', 'UserNotificationsController@show')->middleware('auth');


Auth::routes();
*/


