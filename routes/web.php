<?php
use \App\Http\Controllers\PostsController as PostsController;
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/news', 'PostsController@index');
Route::get('/news/{post}', 'PostsController@show');
Route::get('/news/category/{category}', 'PostsController@index_category');
Route::get('/events', 'EventsController@index');
Route::get('/members', 'MembersController@index');

Route::post('/admin', 'Admin\AuthController@login');

Route::middleware(['authorized'])->group(function () {
    // AUTH
    Route::get('/admin', 'Admin\AuthController@admin');
    Route::get('/admin/logout', 'Admin\AuthController@logout');
    // NEWS
    Route::get('/admin/news/add', 'DashboardController@new_add');
    Route::get('/admin/news/panel', 'DashboardController@news_panel');
    Route::get('/admin/news/edit/{id}', 'DashboardController@post_edit');
    Route::get('/admin/news/delete/{id}', 'PostsController@post_delete');
    // EVENTS
    Route::get('/admin/events/add', 'DashboardController@event_add');
    Route::get('/admin/events/panel', 'DashboardController@events_panel');
    Route::get('/admin/events/delete/{id}', 'EventsController@event_delete');
    Route::get('/admin/events/edit/{id}', 'EventsController@event_edit');
    // CATEGORIES
    Route::get('/admin/categories', 'DashboardController@categories');
    Route::get('/admin/categories/delete/{id}', 'CategoriesController@delete');
    Route::get('/admin/categories/edit/{id}', 'CategoriesController@edit');
    // PARTNERS
    Route::get('/admin/partners/add', 'DashboardController@partener_add');
    Route::get('/admin/partners/delete/{id}', 'PartnersController@partner_delete');
    Route::get('/admin/partners/edit/{id}', 'PartnersController@partner_edit');
    // MEMBERS
    Route::get('/admin/members/add', 'DashboardController@member_add');
    Route::get('/admin/members/panel', 'MembersController@members_panel');
    Route::get('/admin/members/delete/{id}', 'MembersController@member_delete');
    Route::get('/admin/members/edit/{id}', 'MembersController@member_edit');
    // Route::get('/admin', 'DashboardController@');
    // Route::get('/admin', 'DashboardController@');
    Route::post('/post/create', 'PostsController@create');
    Route::post('/post/edit/{id}', 'PostsController@create');
    Route::post('/event/create', 'EventsController@create');
    Route::post('/event/edit/{id}', 'EventsController@create');
    Route::post('/img/create', 'FilesController@create');
    Route::post('/category/create', 'CategoriesController@create');
    Route::post('/category/create/{id}', 'CategoriesController@create');
    Route::post('/partner/create', 'PartnersController@create');
    Route::post('/partner/create/{id}', 'PartnersController@create');
    Route::post('/member/create', 'MembersController@create');
    Route::post('/member/create/{id}', 'MembersController@create');
    // Route::get('/admin/{var}', 'Admin\AuthController@exp');
});