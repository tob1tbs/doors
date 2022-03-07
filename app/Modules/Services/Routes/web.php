<?php

// GENERAL ROUTES
Route::group(['prefix' => 'services', 'middleware' => []], function () {
    Route::get('/', 'ServicesController@actionServicesIndex')->name('actionServicesIndex');
});

// AJAX ROUTES
Route::group(['prefix' => 'services/ajax', 'middleware' => []], function () {
    
});