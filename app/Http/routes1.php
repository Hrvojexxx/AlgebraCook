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

Route::get('/recipes' 'RecipesController@index');

Route::get('/recipes', function() { return "Popis recepata"; });

Route::get('/recipes/add' function() { return "Dodavanje recepta - prikaz Web Obrasca"; });
Route::post('/recipes/add' function() { return "Dodavanje recepta - spremanje podataka o novom receptu"; });
