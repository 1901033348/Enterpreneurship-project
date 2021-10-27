<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MailController;


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

Route::get('', function () {
    return view('index');
});

Route::get('/post/{id}', function($id){
    return "id number is: " .$id;
})->where('id','[0-9]+');

Route::get('/post',[PostController::class,'index']);


Route::get('/sleepstore', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/furniture', function () {
    return view('furniture');
});

Route::get('/text', function () {
    return view('text');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/send', [MailController::class, 'sendToMail']);
