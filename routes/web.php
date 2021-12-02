<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Models\Blog;
use Illuminate\Support\Facades\Request;
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

Route::prefix('/u/p/a/')->middleware(['auth:sanctum', 'verified'])->group(function(){

	// Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
	Route::resource('/blogs', BlogController::class);
	Route::delete('/blogs', [BlogController::class, 'delBlogs'])->name('delBlogs');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/blogs', function(){
    return view('blogs');
});

Route::get('/blog/{slug}', function($slug){
    return view('blogDetail');
});

Route::middleware(['auth:sanctum', 'verified'])->prefix('/u/p/a')->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('/mail', [ContactController::class, 'mailToAdmin'])->name('mail');


