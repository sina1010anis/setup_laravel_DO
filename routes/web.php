<?php

use App\Http\Controllers\IndexController;
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

Route::view('/', 'welcome');
Route::get('/count', [IndexController::class, 'count']);
Route::get('/test', [IndexController::class,'test']);
Route::post('/test-2', [IndexController::class,'test2']);
Route::post('/elasticsearch', [IndexController::class, 'index'])->name('elsticsearch');
// ********************* Creational **************************** //
Route::get('/absf', [IndexController::class,'absf']);
Route::get('/builder', [IndexController::class,'builder']);
Route::get('/factory', [IndexController::class,'factory']);
Route::get('/prototype', [IndexController::class,'prototype']);
Route::get('/p1', [IndexController::class,'p1']);
Route::get('/sitemap', [IndexController::class,'sitemap']);
Route::get('/simpelfactory', [IndexController::class,'simpelfactory']);
Route::get('/singelton', [IndexController::class,'singelton']);
Route::get('/staticfactory', [IndexController::class,'staticfactory']);
// ********************* Structural **************************** //
Route::get('/adapter', [IndexController::class,'adapter']);
Route::get('/bridge', [IndexController::class,'bridge']);
Route::get('/composite', [IndexController::class,'composite']);
Route::get('/decorator', [IndexController::class,'decorator']);
Route::get('/dependencyInjection', [IndexController::class,'dependencyInjection']);
Route::get('/facade', [IndexController::class,'facade']);
Route::get('/flyweight', [IndexController::class,'flyweight']);
