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

Route::get('/', 'ListController@show');

Route::get('/auth0/callback', function() {
   dd(Auth0::getUser());
});

Route::get('/logout', function () {
   Auth::logout();

   return redirect('/');
});

Route::auth();

Route::get('/got', [
  'middleware' => ['auth'],
  'uses' => function () {
   echo "You are allowed to view this page!";
}]);

Route::get('/home', 'HomeController@index');
