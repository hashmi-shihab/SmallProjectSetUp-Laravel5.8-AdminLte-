<?php


Route::group([
    'namespace' => 'Admin',
], function(){
    Route::resource('users', 'UserInfoController');
    Route::get('passwordCreate', 'UserInfoController@passwordCreate')->name('passwordCreate');
    Route::post('passwordChange', 'UserInfoController@changePassword')->name('passwordChange');
});

Route::group([
    'namespace' => 'PublicView',
], function(){
    /*Route::get('/','IndexController@index')->name('publicHome');*/


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

