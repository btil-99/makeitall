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

//Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/login', 'PagesController@login');

Route::get('/menu', 'PagesController@menu');

Route::get('/menu2', 'PagesController@menu2');

Route::get('/logProblem', 'PagesController@logProblem');

Route::get('/searchProblems', 'PagesController@searchProblems');

Route::get('/specialists', 'PagesController@specialists');

Route::get('/personnel', 'PagesController@personnel');

Route::get('/equip', 'PagesController@equip');
/*Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is user '.$name.' with an id of '.$id;
});*/