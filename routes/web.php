<?php

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
use GuzzleHttp\Psr7\Stream;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\Facades\Image;

Route::get('/', function () {
    $images = \App\Image::all();
    return view('welcome', compact('images'));
});

Route::post('/images', 'ImageController@store');


Auth::routes();

Route::get('/home', 'HomeController@index');
