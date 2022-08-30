<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplexController;
use App\Http\Controllers\AboutController;
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

Route::get('/', function () {
    //return view('welcome');
    return('First route');
});

Route::get('/complex', [ComplexController::class,'index'])->name('complex.index');

Route::get('/complex/create', [ComplexController::class,'create']);

Route::get('/complex/update', [ComplexController::class,'update']);

Route::get('/complex/delete', [ComplexController::class,'delete']);

Route::get('/about', [AboutController::class,'about'])->name('about.index');

Route::get('/contacts', [ContactController::class,'contacts'])->name('contact.index');




