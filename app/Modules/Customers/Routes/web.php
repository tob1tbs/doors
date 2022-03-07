<?php

// GENERAL ROUTES
Route::group(['prefix' => 'customers', 'middleware' => []], function () {
    Route::get('/', 'CustomersController@actionCustomersIndex')->name('actionCustomersIndex');
    Route::get('/add', 'CustomersController@actionCustomersAdd')->name('actionCustomersAdd');
    Route::get('/view/{customer_id}', 'CustomersController@actionCustomersView')->name('actionCustomersView');
});

// AJAX ROUTES
Route::group(['prefix' => 'customers/ajax', 'middleware' => []], function () {
    Route::post('/submit', 'CustomersAjaxController@ajaxCustomersSubmit')->name('ajaxCustomersSubmit');
    Route::post('/active', 'CustomersAjaxController@ajaxCustomersActiveChange')->name('ajaxCustomersActiveChange');
    Route::post('/company/active', 'CustomersAjaxController@ajaxCompanyActiveChange')->name('ajaxCompanyActiveChange');
    
});