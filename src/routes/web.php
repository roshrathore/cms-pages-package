<?php

Route::group(['namespace' => 'Indianic\CmsPages\Controllers', 'middleware'=>['web','admin']], function () {
    Route::post('cms-pages/changeStatus', 'CmsPageController@changeStatus')->name('cms-pages.change_status');
    Route::resource('cms-pages', 'LaravelCmsPagesController');
});