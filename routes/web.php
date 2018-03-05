<?php
use \App\Http\Controllers\PostsController as PostsController;
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/news', 'PostsController@index');
Route::get('/news/{post}', 'PostsController@show');
Route::get('/news/category/{category}', 'PostsController@index_category');
Route::get('/events', 'EventsController@index');


Route::post('/admin', 'Admin\AuthController@login');

Route::middleware(['authorized'])->group(function () {
    Route::get('/admin', 'Admin\AuthController@admin');
    Route::get('/admin/logout', 'Admin\AuthController@logout');

    Route::get('/admin/news/add', 'DashboardController@news_add');
    Route::get('/admin/news/panel', 'DashboardController@news_panel');

    Route::get('/admin/news/edit/{id}', 'DashboardController@post_edit');
    Route::get('/admin/news/delete/{id}', 'PostsController@post_delete');
    
    Route::get('/admin/events/add', 'DashboardController@events_add');
    Route::get('/admin/categories', 'DashboardController@categories');
    Route::get('/admin/partners/add', 'DashboardController@parteners');
    // Route::get('/admin', 'DashboardController@');
    // Route::get('/admin', 'DashboardController@');
    Route::post('/post/create', 'PostsController@create');
    Route::post('/post/edit/{id}', 'PostsController@create');
    Route::post('/event/create', 'EventsController@create');
    Route::post('/img/create', 'FilesController@create');
    Route::post('/category/create', 'CategoriesController@create');
    Route::post('/partner/create', 'PartnersController@create');
    // Route::get('/admin/{var}', 'Admin\AuthController@exp');
});