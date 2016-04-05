<?php


Route::get('mainCategory/{id?}', 'CategoryController@getMainCategory');
Route::get('subCategory/{id?}', 'CategoryController@getSubCategory');
Route::get('areas/{id?}', 'AreaController@getAreas');
Route::get('shops/{id?}', 'ShopController@getShops');

Route::get('cities/{id?}', 'CityController@getCities');
Route::get('reviews', 'ReviewController@getReviews');
Route::get('ratings', 'RatingController@getRatings');
Route::get('users/{id?}', 'UserController@getUsers');
Route::get('reset','Auth\PasswordController@getEmail');
Route::get('password/reset/{token?}','Auth\PasswordController@getReset');





Route::post('login', 'Auth\AuthController@login');
Route::post('register', 'Auth\AuthController@register');
Route::post('password/email','Auth\PasswordController@postEmail');
Route::post('users', 'UserController@updateProfile');
Route::post('ratings', 'RatingController@postRatings');
Route::post('reviews', 'ReviewController@postReviews');
Route::post('shops', 'ShopController@postShops');
Route::post('password/reset','Auth\PasswordController@postReset');


Route::delete('reviews', 'ReviewController@deleteReviews');







