<?php

Route::match(['get', 'post'], '/', 'IndexController@index');

Route::middleware(['auth'])->group(function () {

    Route::get('admin', 'AdminController@index');

});
