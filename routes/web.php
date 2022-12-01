<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\SectionController;

use App\Http\Controllers\backend\GradeController;
use App\Http\Controllers\backend\ClasseController;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


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



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...

        // ['register' => false]
        Auth::routes();

        Route::get('/', function () {
            return view('welcome');
        });

        Route::get('/dash', function () {
            return view('home');
        });
        Route::resource('grades',GradeController::class);
        Route::resource('classes',ClasseController::class);
        Route::resource('sections',SectionController::class);

        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    });






