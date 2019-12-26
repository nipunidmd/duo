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



Route::get('/', 'HomeController@index')->name('home');

Route::get('error/{id}', function($id)
{
  dd('ERORR CODE:' . $id);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about-us', 'HomeController@aboutUs')->name('about-us');

Route::get('/gallery', 'HomeController@gallery')->name('gallery');

Route::get('/under-construction', 'ProjectController@underConstruction')->name('under-construction');
Route::get('/proposal', 'ProjectController@proposal')->name('proposal');
Route::get('/under-construction-detail', 'ProjectController@underConstructionDetail')->name('under-construction-detail');
Route::get('/contact-us', 'ContactUsController@index')->name('contact-us');
Route::post('send','ContactusController@send')->name('send');

Route::get('/project', 'ProjectController@index')->name('project');
Route::get('/{slug}', 'ProjectController@projectDetail')->name('search.project');



