<?php

Route::get('/','PageController@home');
Route::get('{uri}','PageController@page');

// Post
Route::get('/backend/post','Mari\Post\Http\Controllers\PostController@index');
Route::get('/backend/post/create','Mari\Post\Http\Controllers\PostController@create');
Route::post('/backend/post/create','Mari\Post\Http\Controllers\PostController@store');
Route::get('/backend/post/{id}','Mari\Post\Http\Controllers\PostController@show');
Route::get('/backend/post/{id}/edit','Mari\Post\Http\Controllers\PostController@edit');
Route::post('/backend/post/{id}/edit','Mari\Post\Http\Controllers\PostController@update');
Route::post('/backend/post/delete','Mari\Post\Http\Controllers\PostController@destroy');

// Category
Route::get('/backend/category','Mari\Category\Http\Controllers\CategoryController@index');
Route::get('/backend/category/create','Mari\Category\Http\Controllers\CategoryController@create');
Route::post('/backend/category/create','Mari\Category\Http\Controllers\CategoryController@store');
Route::get('/backend/category/{id}','Mari\Category\Http\Controllers\CategoryController@show');
Route::get('/backend/category/{id}/edit','Mari\Category\Http\Controllers\CategoryController@edit');
Route::post('/backend/category/{id}/edit','Mari\Category\Http\Controllers\CategoryController@update');
Route::post('/backend/category/delete','Mari\Category\Http\Controllers\CategoryController@destroy');
