<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\QueryController;

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

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/queryform', [QueryController::class, 'query']);
Route::post('/queryform', [QueryController::class, 'store'])->name('query.store');


Route::get('/contact', [ContactController::class, 'contact']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

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

Route::get('/upsc', function () {
    return view('upsc');
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

Route::get('/appgallery', function () {
    return view('appgallery');
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

Route::get('/englishcourse', function () {
    return view('englishcourse');
});


Route::get('/testseries', function () {
    return view('testseries');
});

Route::get('/videoseries', function () {
    return view('videoseries');
});

// Route::get('/queryform', function () {
//     return view('query');
// });