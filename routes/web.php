<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/service/nerve_conduction', function () {
    return view('nerve_conduction');
});

Route::get('/service/neurological_assessment', function () {
    return view('neurological_assessment');
});

Route::get('/service/electroencephalography', function () {
    return view('electroencephalography');
});

Route::get('/service/electrocardiography', function () {
    return view('electrocardiography');
});

Route::get('/service/ultrasound', function () {
    return view('ultrasound');
});

Route::get('/service/respiratory', function () {
    return view('respiratory');
});

Route::resource('products', ProductsController::class);
