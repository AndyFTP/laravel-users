<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

// APP Routes Below
Route::group(['middleware' => ['web','admin']], function () {
	Route::resource('users', 'jeremykenedy\laravelusers\app\Http\Controllers\UsersManagementController', [
		'names' => [
		    'index' => 'users',
		    'destroy' => 'user.destroy'
		]
	]);
});