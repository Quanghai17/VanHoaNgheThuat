<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('clear-cache', function () {
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
//    Artisan::call('view:clear');
//    Artisan::call('cms:publish:assets');
//    Artisan::call('storage:link');
    return 'xong';
});

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group([], function (){
    Route::resource('/',\Frontend\HomeController::class);
    // Route::resource('/field',\Frontend\FieldOfActivityController::class);
    // Route::resource('/product',\Frontend\ProductController::class);
    // Route::resource('ticket', \App\Http\Controllers\Frontend\TicketController::class);
    Route::get('/lien-he',"\App\Http\Controllers\Frontend\ContactController@index")->name('contact');
    Route::get('/gioi-thieu',"\App\Http\Controllers\Frontend\AboutController@index")->name('about');
    Route::get('/blogs',"\App\Http\Controllers\Frontend\PostController@index")->name('blogs');
    Route::get('/blogs/{slug}',"\App\Http\Controllers\Frontend\PostController@blogDetail")->name('blog.detail');
    Route::get('/category/{slug}',"\App\Http\Controllers\Frontend\PostController@PostByCategory")->name('category');
    Route::resource('documents', \Frontend\DocumentController::class);
    Route::resource('pages',\Frontend\PageController::class);
    // Route::resource('services',\Frontend\ServiceController::class);
    Route::post('/feedback',"\App\Http\Controllers\Frontend\FeedbackController@store")->name('feedback');

});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('sitemap-create', function () {
  Artisan::call('sitemap:create');

  return 'xong';
});