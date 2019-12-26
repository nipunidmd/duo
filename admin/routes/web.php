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

//user login urls
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::post('login', 'Auth\LoginController@login');

// Route::get('api-sync','ApiSyncController@index');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'DashboardController@index')->name('home');
    Route::get('/dashboard', 'DashboardController@index')->name('home');
    Route::get('/', 'DashboardController@index')->name('dashboard');

    //user
    Route::resource('user', 'UserController');
    Route::post('user-active', 'UserController@active')->name('user.active');
    Route::post('profile/update', 'UserController@profileUpdate')->name('profile.update');
    Route::post('user/password-rest', 'UserController@resetPassword')->name('user.password.rest');
    Route::post('user/data', 'UserController@getAll');

    // Project
    Route::resource('projects', 'ProjectController');
    Route::post('projects/data', 'ProjectController@data');
    Route::post('project-active', 'ProjectController@active')->name('project.active');
    Route::post('projects/create', 'ProjectController@store');
    Route::post('projects/{id}/update', 'ProjectController@update');
    Route::post('view-project', 'ProjectController@viewProject');
});

Route::get('error/{id}', function($id)
{
  dd('ERROR CODE : '.$id);
});
