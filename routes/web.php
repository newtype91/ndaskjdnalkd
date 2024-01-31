<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
   Route::get('/', 'IndexController')->name('main.index');
});

Route::group(['namespace' => 'App\Http\Controllers\Page', 'prefix' => 'pages'], function () {
    Route::get('/{page}', 'IndexController')->name('pages.index');
});
Route::group(['namespace' => 'App\Http\Controllers\Doc'], function () {
    Route::get('/documents', 'IndexController')->name('docs.index');
});
Route::group(['namespace' => 'App\Http\Controllers\News', 'prefix' => 'news'], function () {
    Route::get('/{news}', 'IndexController')->name('news.show');
    Route::get('/', 'ShowController')->name('news.index');
});

Route::group(['namespace' => 'App\Http\Controllers\Event', 'prefix' => 'events'], function () {
    Route::get('/{event}', 'IndexController')->name('events.show');
    Route::get('/', 'ShowController')->name('events.index');
});

Route::group(['namespace' => 'App\Http\Controllers\Team', 'prefix' => 'structure'], function () {
    Route::get('/{team}', 'IndexController')->name('teams.show');
    Route::get('/', 'ShowController')->name('teams.index');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => [ 'auth','admin'] ], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.main.index');
    });

    Route::group(['namespace' => 'Post', 'prefix' => 'news'], function () {
        Route::get('/', 'IndexController')->name('admin.news.index');
        Route::get('/create', 'CreateController')->name('admin.news.create');
        Route::post('/', 'StoreController')->name('admin.news.store');
        Route::get('/{post}', 'ShowController')->name('admin.news.show');
        Route::get('/{post}/edit', 'EditController')->name('admin.news.edit');
        Route::patch('/{post}', 'UpdateController')->name('admin.news.update');
        Route::delete('/{post}', 'DeleteController')->name('admin.news.delete');
    });

    Route::group(['namespace' => 'Page', 'prefix' => 'pages'], function () {
        Route::get('/', 'IndexController')->name('admin.pages.index');
        Route::get('/create', 'CreateController')->name('admin.pages.create');
        Route::post('/', 'StoreController')->name('admin.pages.store');
        Route::get('/{page}', 'ShowController')->name('admin.pages.show');
        Route::get('/{page}/edit', 'EditController')->name('admin.pages.edit');
        Route::patch('/{page}', 'UpdateController')->name('admin.pages.update');
        Route::delete('/{page}', 'DeleteController')->name('admin.pages.delete');
    });

        Route::group(['namespace' => 'Event', 'prefix' => 'events'], function () {
            Route::get('/', 'IndexController')->name('admin.events.index');
            Route::get('/create', 'CreateController')->name('admin.events.create');
            Route::post('/', 'StoreController')->name('admin.events.store');
            Route::get('/{event}', 'ShowController')->name('admin.events.show');
            Route::get('/{event}/edit', 'EditController')->name('admin.events.edit');
            Route::patch('/{event}', 'UpdateController')->name('admin.events.update');
            Route::delete('/{event}', 'DeleteController')->name('admin.events.delete');
        });

         Route::group(['namespace' => 'Team', 'prefix' => 'team'], function () {
             Route::get('/', 'IndexController')->name('admin.teams.index');
             Route::get('/create', 'CreateController')->name('admin.teams.create');
             Route::post('/', 'StoreController')->name('admin.teams.store');
             Route::get('/{team}', 'ShowController')->name('admin.teams.show');
             Route::get('/{team}/edit', 'EditController')->name('admin.teams.edit');
             Route::patch('/{team}', 'UpdateController')->name('admin.teams.update');
             Route::delete('/{team}', 'DeleteController')->name('admin.teams.delete');
         });

        Route::group(['namespace' => 'Doc', 'prefix' => 'docs'], function () {
            Route::get('/', 'IndexController')->name('admin.docs.index');
            Route::get('/create', 'CreateController')->name('admin.docs.create');
            Route::post('/', 'StoreController')->name('admin.docs.store');
            Route::get('/{doc}', 'ShowController')->name('admin.docs.show');
            Route::get('/{doc}/edit', 'EditController')->name('admin.docs.edit');
            Route::patch('/{doc}', 'UpdateController')->name('admin.docs.update');
            Route::delete('/{doc}', 'DeleteController')->name('admin.docs.delete');
        });

        Route::group(['namespace' => 'Slider', 'prefix' => 'banners'], function () {
            Route::get('/', 'IndexController')->name('admin.banners.index');
            Route::get('/create', 'CreateController')->name('admin.banners.create');
            Route::post('/', 'StoreController')->name('admin.banners.store');
            Route::get('/{slider}', 'ShowController')->name('admin.banners.show');
            Route::get('/{slider}/edit', 'EditController')->name('admin.banners.edit');
            Route::patch('/{slider}', 'UpdateController')->name('admin.banners.update');
            Route::delete('/{slider}', 'DeleteController')->name('admin.banners.delete');
        });
});

Auth::routes();

