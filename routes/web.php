<?php

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

Route::get('/frontpage_1', [App\Http\Controllers\HomeController::class, 'frontpage_1']);
Route::get('/frontpage', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/project-details', [App\Http\Controllers\HomeController::class, 'projectDetails']);

Route::get('locale/{locale?}', [App\Http\Controllers\LocaleController::class, 'setLocale'])->name('set-locale');
Route::post('contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
