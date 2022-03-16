<?php

// GENERAL ROUTES
Route::group(['prefix' => 'orders', 'middleware' => []], function () {
    Route::get('/', 'OrdersController@actionOrdersIndex')->name('actionOrdersIndex');
    Route::get('/view/{order_id}', 'OrdersController@actionOrdersView')->name('actionOrdersView');
    Route::get('/add', 'OrdersController@actionOrdersAdd')->name('actionOrdersAdd');
    Route::get('/warehouse', 'OrdersController@actionOrdersWarehouse')->name('actionOrdersWarehouse');
    Route::get('/warehouse/view/{warehouse}/{child_warehouse}', 'OrdersController@actionOrdersWarehouseView')->name('actionOrdersWarehouseView');
});

// AJAX ROUTES
Route::group(['prefix' => 'orders/ajax', 'middleware' => []], function () {
    Route::get('/get/child_warehouse', 'OrdersAjaxController@getOrderChildWareHouse')->name('getOrderChildWareHouse');
});