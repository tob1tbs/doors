<?php

// GENERAL ROUTES
Route::group(['prefix' => 'orders', 'middleware' => []], function () {
    Route::get('/', 'OrdersController@actionOrdersIndex')->name('actionOrdersIndex');
    Route::get('/add', 'OrdersController@actionOrdersAdd')->name('actionOrdersAdd');
    Route::get('/warehouse', 'OrdersController@actionOrdersWarehouse')->name('actionOrdersWarehouse');
});

// AJAX ROUTES
Route::group(['prefix' => 'orders/ajax', 'middleware' => []], function () {
    
});