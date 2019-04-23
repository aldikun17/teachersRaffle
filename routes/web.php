<?php

use App\Model\ticket_winner;

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

Route::get('/','Web\WebController@web_index')->name('/');
Route::get('generate_ticket','Web\WebController@generate_ticket')->name('generate_ticket');
Route::get('ticket/number/{id}/{amount?}','Web\WebController@ticket_generated');
Route::resource('teacher',		'Web\TeacherTicketing');

Route::get('winners',function(){

	$tickets  = ticket_winner::all();

	return view('reports.winner_reports',compact('tickets'));

});
