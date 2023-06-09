<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\UserController;

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

Route::get('/', [MainController::class, 'index'])->name('main');

Route::controller(LoginController::class)->group(function (){
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate')->name('login.authenticate');
    Route::get('/logout', 'logout')->name('login.logout');
});

Route::controller(RegisterController::class)->group(function (){
    Route::get('/register', 'create')->name('register');
    Route::post('/register', 'store')->name('register.store');
});

Route::controller(AccountController::class)->group(function (){
    Route::get('/dashboard', 'dashboard')->name('account.dashboard');
    Route::post('/dashboard/update', 'update')->name('account.update');
    Route::get('/dashboard/pending', 'pending')->name('account.pending');
});

Route::controller(CompanyController::class)->group(function (){
    Route::get('/company', 'index')->name('company.index'); 
    Route::get('/company/search', 'search')->name('company.search'); 
    Route::get('/company/{id}', 'show')->name('company.show')->where('id', '[0-9]+');
    Route::get('/company/create', 'create')->name('company.create');
    Route::post('/company/store', 'store')->name('company.store');
    Route::get('/company/{id}/edit', 'edit')->name('company.edit')->where('id', '[0-9]+');
    Route::post('/company/{id}/edit', 'update')->name('company.update')->where('id', '[0-9]+');
    Route::get('/company/{id}/delete', 'destroy')->name('company.delete')->where('id', '[0-9]+');
    Route::get('/company/{id}/addReview', 'review_form')->name('company.reviewForm')->where('id', '[0-9]+');
    Route::post('/company/{id}/addReview', 'review_add')->name('company.addReview')->where('id', '[0-9]+');
});

Route::controller(UserController::class)->group(function (){
    Route::get('/user/{id}', 'show')->name('user.show')->where('id', '[0-9]+');
    Route::get('/user/{id}/accept', 'accept')->name('user.accept')->where('id', '[0-9]+');
    Route::get('/user/{id}/edit', 'edit')->name('user.edit')->where('id', '[0-9]+');
    Route::post('/user/{id}/edit', 'update')->name('user.update')->where('id', '[0-9]+');
    Route::get('/user/{id}/delete', 'destroy')->name('user.delete')->where('id', '[0-9]+');
});

Route::any('{url}', function(){
    return redirect('/');
})->where('url', '.*');