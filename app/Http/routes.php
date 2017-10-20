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

use App\Task;
use Illuminate\Http\Request;

//prikaz svih taskova u bazi
Route::get('/', 'TaskList@index');
   

//dodavanje novog taska
Route::post('/task', 'TaskList@store');

//brisanje postojećeg taska
Route::delete('/task/{id}', 'TaskList@destroy');

//prikaz određenog taska
Route::get('/task/{id}', 'TaskList@show');
	







