<?php

Route::get('/backend/comment','Mari\Comment\Http\Controllers\CommentController@index');
Route::get('/backend/comment/create','Mari\Comment\Http\Controllers\CommentController@create');
Route::post('/backend/comment/create','Mari\Comment\Http\Controllers\CommentController@store');
Route::get('/backend/comment/{id}','Mari\Comment\Http\Controllers\CommentController@show');
Route::get('/backend/comment/{id}/edit','Mari\Comment\Http\Controllers\CommentController@edit');
Route::post('/backend/comment/{id}/edit','Mari\Comment\Http\Controllers\CommentController@update');
Route::post('/backend/comment/delete','Mari\Comment\Http\Controllers\CommentController@destroy');
