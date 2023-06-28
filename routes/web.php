<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view('welcome');
});
Route::get('/index', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/aboutopsingh', function () {
    return view('aboutopsingh');
});

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

Route::get('/testimonial', function () {
    return view('testimonial');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/mission', function () {
    return view('mission');
});

Route::get('/techmed', function () {
    return view('techmed');
});

Route::get('/charitable', function () {
    return view('charitable');
});

Route::get('/msclife', function () {
    return view('msclife');
});
Route::get('/studymaterial', function () {
    return view('studymaterial');
});
Route::get('/studyvideo', function () {
    return view('studyvideo');
});

Route::get('/govtassociation', function () {
    return view('govtassociation');
});

Route::get('/computertraining', function () {
    return view('computertraining');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/photogallery', function () {
    return view('photogallery');
});

Route::get('/videogallery', function () {
    return view('videogallery');
});

Route::get('/media', function () {
    return view('media');
});


Route::get('/testseries', function () {
    return view('testseries');
});

Route::get('/videoseries', function () {
    return view('videoseries');
});

Route::get('/queryform', function () {
    return view('query');
});