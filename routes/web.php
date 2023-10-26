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
Route::get('/test', function (){
    echo 'Hello World...!';
});
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
// *********************  **************************** //
Route::get('/adapter', [IndexController::class,'adapter']);
