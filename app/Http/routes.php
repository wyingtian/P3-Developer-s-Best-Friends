<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'WelcomePageController@getWelcomePage');
    Route::get('lorem-ipsum','LoremIpsumController@getRandomText');
    Route::post('lorem-ipsum','LoremIpsumController@postRandomText');
    Route::get('user-generator','UserGeneratorController@getRandomUser');
    Route::post('user-generator','UserGeneratorController@postRandomUser');
    Route::get('password-generator','PasswordGeneratorController@getRandomPassword');
    Route::post('password-generator','PasswordGeneratorController@postRandomPassword');

    # Restrict certain routes to only be viewable in the local environments
    if(App::environment('local')) {
        Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    }
});
