<?php
Route::get('/account/dashboard', 'DashboardController@index')->name('account.dashboard');
Route::get('/password/change', 'DashboardController@change')->name('account.chage');
Route::get('/account/info', 'AccountController@index')->name('account.info');
Route::post('/account/info', 'AccountController@update');

