<?php

use Illuminate\Support\Facades\Route;

// Dashboard
Route::get('/home', 'AdminController@home')->name('home');

/*Admin routes Start*/

Route::get('/admins', 'AdminController@index')->name('admins');

Route::get('/add-admin', 'AdminController@add')->name('admin.add');

Route::post('/store-admin', 'AdminController@store')->name('admin.store');

Route::post('/update-admin', 'AdminController@update')->name('admin.update');

Route::get('/edit-admin/{admin}', 'AdminController@edit')->name('admin.edit');

Route::get('/delete-admin/{admin}', 'AdminController@destroy')->name('admin.delete');

/*Admin routes End*/

// Login
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Register
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Reset Password
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Confirm Password
Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

// Verify Email
// Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
// Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
// Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::get('/modules', 'ModulesController@index')->name('modules');

Route::get('/add-module', 'ModulesController@add')->name('modules.add');

Route::post('/store-module', 'ModulesController@store')->name('modules.store');

Route::post('/update-module', 'ModulesController@update')->name('modules.update');

Route::get('/edit-module/{module}', 'ModulesController@edit')->name('modules.edit');

Route::get('/delete-module/{module}', 'ModulesController@destroy')->name('modules.delete');





/*Menu Types routes Start*/

Route::get('/menu-types', 'MenuTypesController@index')->name('menu_types');

Route::get('/add-menu-type', 'MenuTypesController@add')->name('menu_types.add');

Route::post('/store-menu-type', 'MenuTypesController@store')->name('menu_types.store');

Route::post('/update-menu-type', 'MenuTypesController@update')->name('menu_types.update');

Route::get('/edit-menu-type/{menu_type}', 'MenuTypesController@edit')->name('menu_types.edit');

Route::get('/delete-menu-type/{menu_type}', 'MenuTypesController@destroy')->name('menu_types.delete');



/*Menu Types routes End*/


/*Menu routes Start*/

Route::get('/menus', 'MenusController@index')->name('menus');

Route::get('/add-menu', 'MenusController@add')->name('menus.add');

Route::post('/store-menu', 'MenusController@store')->name('menus.store');

Route::post('/update-menu', 'MenusController@update')->name('menus.update');

Route::get('/edit-menu/{menu}', 'MenusController@edit')->name('menus.edit');

Route::get('/delete-menu/{menu}', 'MenusController@destroy')->name('menus.delete');

Route::post('/menus/post_index','MenusController@post_index')->name('menus.post_index');



/*Menu routes End*/

/*Widget Page routes Start*/

Route::get('/widget-pages', 'WidgetPagesController@index')->name('widget_pages');

Route::get('/add-widget-page', 'WidgetPagesController@add')->name('widget_pages.add');

Route::post('/store-widget-page', 'WidgetPagesController@store')->name('widget_pages.store');

Route::post('/update-widget-page', 'WidgetPagesController@update')->name('widget_pages.update');

Route::get('/edit-widget-page/{widget_page}', 'WidgetPagesController@edit')->name('widget_pages.edit');

Route::get('/delete-widget-page/{widget_page}', 'WidgetPagesController@destroy')->name('widget_pages.delete');

/*Widget Page routes End*/

/*Widget routes Start*/

Route::get('/widgets', 'WidgetsController@index')->name('widgets');

Route::get('/add-widget', 'WidgetsController@add')->name('widgets.add');

Route::post('/store-widget', 'WidgetsController@store')->name('widgets.store');

Route::post('/update-widget', 'WidgetsController@update')->name('widgets.update');

Route::get('/edit-widget/{widget}', 'WidgetsController@edit')->name('widgets.edit');

Route::get('/delete-widget/{widget}', 'WidgetsController@destroy')->name('widgets.delete');

/*Widget routes End*/

/*Widget data routes Start*/

Route::get('/page/{page}', 'WidgetDataController@index')->name('widgets_data');


Route::post('/store-widget-data/{id}', 'WidgetDataController@store')->name('widget_data.store');

Route::post('/update-widget-page', 'WidgetDataController@update')->name('widget_pages.update');


Route::get('/delete-widget-page/{widget_page}', 'WidgetPagesController@destroy')->name('widget_pages.delete');

/*Widget data routes End*/


/*Tags routes Start*/

Route::get('/tags', 'TagsController@index')->name('tags');

Route::get('/add-tag', 'TagsController@add')->name('tags.add');

Route::post('/store-tag', 'TagsController@store')->name('tags.store');

Route::post('/update-tag', 'TagsController@update')->name('tags.update');

Route::get('/edit-tag/{tag}', 'TagsController@edit')->name('tags.edit');

Route::get('/delete-tag/{tag}', 'TagsController@destroy')->name('tags.delete');

/*Tags routes End*/

/*Contact us routes Start*/

Route::get('/contact-us-messages', 'ContactusController@index')->name('contact-us-messages');

Route::get('/contact-us-detail/{id}', 'ContactusController@detail')->name('contact-us-detail');
Route::get('/contact-us-destroy/{id}', 'ContactusController@destroy')->name('contact-us-destroy');

Route::get('/booking', 'BookingController@index')->name('booking');

Route::get('/booking-detail/{id}', 'BookingController@detail')->name('booking-detail');
Route::get('/booking-destroy/{id}', 'BookingController@destroy')->name('booking-destroy');

Route::get('/delete-tag/{tag}', 'TagsController@destroy')->name('tags.delete');

/*Contact us routes End*/


/*Modules Data routes Start*/

Route::get('/{module}', 'ModulesDataController@index')->name('modules.data');

Route::get('/{module}/add', 'ModulesDataController@add')->name('modules.data.add');

Route::post('/{module}/store', 'ModulesDataController@store')->name('modules.data.store');

Route::post('/{module}/update', 'ModulesDataController@update')->name('modules.data.update');

Route::get('/{module}/edit/{id}', 'ModulesDataController@edit')->name('modules.data.edit');

Route::get('/{module}/delete/{id}', 'ModulesDataController@destroy')->name('modules.data.delete');

Route::get('/data-status/{module}/{status}', 'ModulesDataController@update_status');

/*Modules Data routes End*/