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
    return view('auth/login');
});

Auth::routes();

Route::get('/notes', 'Note\NoteController@index');
Route::post('/view_note', 'Note\NoteController@view');
Route::post('/edit_note_data', 'Note\NoteController@editData');
Route::post('/create_note', 'Note\NoteController@create');
Route::post('/delete_note', 'Note\NoteController@delete');
Route::post('/save_edit_note','Note\NoteController@saveEditNote');





