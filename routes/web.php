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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/edit', 'EditController@index')->name('edit');
Route::post('/edit', 'EditController@update')->name('edit');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('yamls', 'Behat\YamlController');
Route::resource('steps', 'Behat\StepController');
Route::resource('scenarios', 'Behat\ScenarioController');
Route::get('scenario/autocomplete', 'ScenarioController@autocomplete');