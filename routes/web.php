<?php

Route::get('/', 'FrontEndController@index');

Route::prefix('v1')->middleware('APIKey')->group(function(){

    Route::get('/', 'FrontEndController@index');
    Route::post('post-question', 'ApiController@postQuestion');
});

