<?php

// GENERAL ROUTES
Route::group(['prefix' => 'parameters', 'middleware' => []], function () {
    Route::get('/web    ', 'ParametersController@actionWebParametersIndex')->name('actionWebParametersIndex');
    Route::get('/translate', 'ParametersController@actionParametersTranslate')->name('actionParametersTranslate');
});

// AJAX ROUTES
Route::group(['prefix' => 'parameters/ajax', 'middleware' => []], function () {
    // TRANSLATE
    Route::post('/translate/update', 'ParametersAjaxController@ajaxParameterTranslateUpdate')->name('ajaxParameterTranslateUpdate');
    Route::post('/translate/add', 'ParametersAjaxController@ajaxParameterTranslateAdd')->name('ajaxParameterTranslateAdd');
});