<?php
use RealRashid\SweetAlert\Facades\Alert;


Route::get('/', 'BackController@index');

Route::post('/login','BackController@login');

Route::get('/home','BackController@home');

Route::post('/checklogin', 'BackController@checklogin');
Route::get('/home', 'BackController@successlogin');
Route::get('/logout', 'BackController@logout');

Route::get('/knowledge/listing','KnowledgeController@listing');
Route::get('/knowledge/getknowledge','KnowledgeController@getKnowledgeByAPI');
Route::get('/knowledge/create','KnowledgeController@create');
Route::post('/knowledge/createknowledge', 'KnowledgeController@createKnowledgeByAPI');
Route::get('/knowledge/edit','KnowledgeController@edit');

Route::get('/seo','SeoController@listing');