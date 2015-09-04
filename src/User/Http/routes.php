<?php

Route::get('user/login','Mari\User\Http\Controllers\UserController@login');
Route::post('user/login','Mari\User\Http\Controllers\UserController@check');

Route::get('user/forget_password','Mari\User\Http\Controllers\UserController@forgetPassword');
Route::post('user/forget_password','Mari\User\Http\Controllers\UserController@checkForgetPassword');

Route::get('user/reset_password','Mari\User\Http\Controllers\UserController@resetPassword');
Route::post('user/reset_password','Mari\User\Http\Controllers\UserController@checkResetPassword');

Route::get('user/signup','Mari\User\Http\Controllers\UserController@create');
Route::post('user/signup','Mari\User\Http\Controllers\UserController@store');

Route::group([ 'middleware' => 'auth'],function(){

  Route::get('user','Mari\User\Http\Controllers\UserController@index');
  Route::get('user/logout','Mari\User\Http\Controllers\UserController@logout');

});
