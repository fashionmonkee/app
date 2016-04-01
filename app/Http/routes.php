<?php


Route::get('mainCategory/{id?}', 'CategoryController@getMainCategory');
Route::get('subCategory/{id?}', 'CategoryController@getSubCategory');
Route::get('areas/{id?}', 'AreaController@getAreas');
Route::get('shops/{id?}', 'ShopController@getShops');
Route::get('reviews', 'ReviewController@getReviews');
Route::get('ratings', 'RatingController@getRatings');
Route::get('users/{id?}', 'UserController@getUsers');



Route::post('login', 'Auth\AuthController@login');
Route::post('register', 'Auth\AuthController@register');
Route::post('users', 'UserController@updateProfile');
Route::post('ratings', 'RatingController@postRatings');
Route::post('reviews', 'ReviewController@postReviews');
Route::post('shops', 'ShopController@postShops');


Route::delete('reviews', 'ReviewController@deleteReviews');







