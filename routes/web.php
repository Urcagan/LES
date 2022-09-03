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

Route::get('/complexes', [ComplexController::class,'index'])->name('complexes.index');

Route::get('/complexes/create', [ComplexController::class,'create'])->name('complexes.create');

Route::post('/complexes', [ComplexController::class,'store'])->name('complexes.store');

Route::get('/complexes/{complex}', [ComplexController::class,'show'])->name('complexes.show');

Route::get('/complexes/{complex}/edit', [ComplexController::class,'edit'])->name('complexes.edit');
Route::patch('/complexes/{complex}', [ComplexController::class,'update'])->name('complexes.update');

Route::delete('/complexes/{complex}', [ComplexController::class,'destroy'])->name('complexes.destroy');



Route::get('/about', [AboutController::class,'about'])->name('about.index');

Route::get('/contacts', [ContactController::class,'contacts'])->name('contact.index');


Route::get('/complexes/create_man', [ComplexController::class,'create_man'])->name('complex_man');




