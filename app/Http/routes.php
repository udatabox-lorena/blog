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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){

	Route::resource('users', 'UsersController');

});


//-----Tutorial Codigo Facilito Laravel5
/*Route::get('articulos/{nombre?}', function($nombre = 'No coloco nombre'){
	echo "El nombre que has colocado es: " . $nombre;
});

Route::get('articulos', [
	'as' => 'articulos',
	'uses' => 'UserController@index'
	]);

Route::group(['prefix' => 'articulos'], function(){

	Route::get('view/{articulo?}', function($articulo = "Vacio"){
		echo $articulo;
	});
});*/
//---------------------------------------

Route::group(['prefix' => 'articulos'], function(){

	Route::get('view/{id}', [
		'uses' => 'TestController@view',
		'as' => 'articulosView'
		]);
});

/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
    Route::group(['prefix' => 'v1'], function () {
        require config('infyom.laravel_generator.path.api_routes');
    });
});


Route::resource('users', 'UserController');

Route::resource('users', 'UserController');

Route::resource('users', 'UserController');

Route::resource('users', 'UserController');

Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@logout');

// Registration Routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

// Password Reset Routes...
Route::get('password/reset', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('/home', 'HomeController@index');

Route::resource('users', 'UserController');

Route::resource('users', 'UserController');