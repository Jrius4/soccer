<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::resource('/articles', 'ApiControllers\Articles\ArticleController',['as'=>'article']);
Route::resource('/article-users', 'ApiControllers\Users\UserController',['as'=>'article']);
Route::group(['middleware' => ['json.response']], function () {
    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });

    //public routes
    Route::post('/login', 'ApiControllers\Auth\AuthController@login')->name('login.api');
    Route::get('/login', 'ApiControllers\Auth\AuthController@auth')->name('login');
    Route::post('/register', 'ApiControllers\Auth\AuthController@register')->name('register.api');

    // private routes
    Route::middleware('auth:api')->group(function () {
       Route::get('/logout','ApiControllers\Auth\AuthController@logout')->name('logout');
    });

});
Route::get('/send/email', 'MailController@mail');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::resources([
    'teams'=>'TeamController',
    'matches'=>'MatchController',
    'fixtures'=>'FixtureController',
    'standings'=>'StandingController',
]);
Route::get('single-team/{id}','TeamController@getAllTeams');
