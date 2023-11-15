<?php

use App\Http\Controllers\BehavioralController;
use App\Http\Controllers\CreationalController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\StructuralController;
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
Route::get('/absf', [CreationalController::class,'absf']);
Route::get('/builder', [CreationalController::class,'builder']);
Route::get('/factory', [CreationalController::class,'factory']);
Route::get('/prototype', [CreationalController::class,'prototype']);
Route::get('/p1', [CreationalController::class,'p1']);
Route::get('/sitemap', [CreationalController::class,'sitemap']);
Route::get('/simpelfactory', [CreationalController::class,'simpelfactory']);
Route::get('/singelton', [CreationalController::class,'singelton']);
Route::get('/staticfactory', [CreationalController::class,'staticfactory']);
// ********************* Structural **************************** //
Route::get('/adapter', [StructuralController::class,'adapter']);
Route::get('/bridge', [StructuralController::class,'bridge']);
Route::get('/composite', [StructuralController::class,'composite']);
Route::get('/decorator', [StructuralController::class,'decorator']);
Route::get('/dependencyInjection', [StructuralController::class,'dependencyInjection']);
Route::get('/facade', [StructuralController::class,'facade']);
Route::get('/flyweight', [StructuralController::class,'flyweight']);
Route::get('/proxy', [StructuralController::class,'proxy']);
// ********************* Behavioral **************************** //
Route::get('/chain', [BehavioralController::class,'chain']);
Route::get('/command', [BehavioralController::class,'command']);
Route::get('/iteretor', [BehavioralController::class,'iteretor']);
Route::get('/mediator', [BehavioralController::class,'mediator']);
Route::get('/memonto', [BehavioralController::class,'memonto']);
Route::get('/observer', [BehavioralController::class,'observer']);
Route::get('/state', [BehavioralController::class,'state']);
Route::get('/state_2', [BehavioralController::class,'state_2']);
