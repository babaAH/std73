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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/blog/article/{id}', 'Admin\BlogController@getArticle')
    ->name('blog-read-article');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::post('/contact/submit', 'ContactController@submit')
    ->name('contact-submit');
    
    
Route::get('/contact/submit', 'ContactController@submit')
    ->name('contact-submit');

Route::get('/work', function () {
    return view('work');
})->name('work');






Route::get('/admin', function () {
    return view('admin.home');
})->name('admin-home');

Route::get('/admin-about', function () {
    return view('admin.about');
})->name('admin-about');



//Admin route group
Route::get('/admin-blog', function () {
    return view('admin.blog');
})->name('admin-blog');

Route::get('/admin-blog-list', function () {
    return view('admin.blog');
})->name('admin-blog-list');

Route::post('/admin-blog-add', 'Admin/BlogController@add')
    ->name('admin-blog-add');

Route::get('/admin-contact', function () {
    return view('admin.contact');
})->name('admin-contact');

Route::get('/admin-work', function () {
    return view('work');
})->name('admin-work');


Route::get('/admin/messages', 'Admin\Messages@showMessages')
    ->name('admin-messages');

