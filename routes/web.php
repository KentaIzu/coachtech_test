<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/form', [ContactController::class,'show'])->name("form.show");
Route::post('/form', [ContactController::class,'post'])->name("form.post");

Route::get('/form/confirm', [ContactController::class,'confirm'])->name("form.confirm");
Route::post('/form/confirm', [ContactController::class,'send'])->name("form.send");


Route::get('/form/thanks', [ContactController::class,'complete'])->name("form.complete");

Route::post('/form/manage', [ContactController::class,'search'])->name("form.search");
Route::get('/form/manage', [ContactController::class,'manage'])->name("form.manage");
Route::post('/form/delete', [ContactController::class, 'delete'])->name('form.delete');