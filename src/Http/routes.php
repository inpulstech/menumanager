<?php

// Admin Interface Routes
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function()
{

	// Dick Menu Manager routes
	Route::get('menu-item/reorder', 'MenuItemCrudController@reorder');
	Route::post('menu-item/reorder', 'MenuItemCrudController@saveReorder');
	Route::resource('menu-item', 'MenuItemCrudController');

});