<?php

// GENERAL ROUTES
Route::group(['prefix' => 'finances', 'middleware' => []], function () {
    Route::get('/', 'FinanceController@actionFinanceIndex')->name('actionFinanceIndex');
});

// AJAX ROUTES
Route::group(['prefix' => 'finances/ajax', 'middleware' => []], function () {
    
});