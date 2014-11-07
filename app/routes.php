<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});




Route::get('/authtest', array('before' => '<span class="skimlinks-unlinked">auth.basic</span>', function()
{
    return View::make('hello');
}));

// Route group for API versioning
Route::group(array('prefix' => 'api/v1', 'before' => '<span class="skimlinks-unlinked">auth.basic</span>'), function()
{
    Route::resource('url', 'UrlController');
});


// string users
Route::get('users', function()
{
        $users = User::all();

    return View::make('users')->with('users', $users);
});





