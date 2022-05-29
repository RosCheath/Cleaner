<?php

use App\Http\Controllers\CreateUserController;
use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//    return view('home_layouts.home');
//});

Auth::routes();
Route::group(['web'],function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
    Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
    Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
    Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
    Route::get('/gallery', [App\Http\Controllers\HomeController::class, 'gallery'])->name('gallery');
});



Route::group(['web','middleware' => 'can:admin-feature'],function(){
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'home_d'])->name('dashboard');
    Route::resource('users', CreateUserController::class);
    Route::get('/pending', [App\Http\Controllers\DashboardController::class, 'pending'])->name('pending');
    Route::get('/dropdown', [App\Http\Controllers\DashboardController::class, 'dropdown'])->name('dropdown');
    Route::get('/typography', [App\Http\Controllers\DashboardController::class, 'typography'])->name('typography');
    Route::get('/chart', [App\Http\Controllers\DashboardController::class, 'chart'])->name('chart');
    Route::get('/icon', [App\Http\Controllers\DashboardController::class, 'icon'])->name('icon');

    Route::get('/blank', [App\Http\Controllers\DashboardController::class, 'blank'])->name('blank');
    Route::get('/404', [App\Http\Controllers\DashboardController::class, 'p404'])->name('404');
    Route::get('/500', [App\Http\Controllers\DashboardController::class, 'p500'])->name('500');
    Route::get('/d-login', [App\Http\Controllers\DashboardController::class, 'login'])->name('d-login');
    Route::get('/d-register', [App\Http\Controllers\DashboardController::class, 'register'])->name('d-register');
});
