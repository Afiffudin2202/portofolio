<?php

use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/resume', function () {
    return view('resume');
});
Route::get('/project', function () {
    return view('project');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::post('contact', [ContactController::class,'sendMail']);
