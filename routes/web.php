<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    //return view('welcome');
    return('First route');
});

Route::group(['namespace' => 'App\Http\Controllers\Complex'], function() {
    Route::get('/complexes', 'IndexController')->name('complexes.index');
    Route::get('/complexes/create', 'CreateController')->name('complexes.create');
    Route::post('/complexes', 'StoreController')->name('complexes.store');
    Route::get('/complexes/{complex}', 'ShowController')->name('complexes.show');
    Route::get('/complexes/{complex}/edit', 'EditController')->name('complexes.edit');
    Route::patch('/complexes/{complex}', 'UpdateController')->name('complexes.update');
    Route::delete('/complexes/{complex}', 'DestroyController')->name('complexes.destroy');
    Route::get('/complexes/create_man', 'WriteController')->name('complex_man');
});



Route::group(['namespace' => 'App\Http\Controllers\Plant'], function () {
    Route::get('/plants', 'IndexController')->name('plants.index');
    Route::get('/plants/create', 'CreateController')->name('plants.create');
    Route::post('/plants', 'StoreController')->name('plants.store');
    Route::get('/plants/{plant}', 'ShowController')->name('plants.show');
    Route::get('/plants/{plant}/edit', 'EditController')->name('plants.edit');
    Route::patch('/plants/{plant}', 'UpdateController')->name('plants.update');
    Route::delete('/plants/{plant}', 'DestroyController')->name('plants.destroy');
});

//Route::resource('plants', PlantController::class);




Route::get('/about', [AboutController::class,'about'])->name('about.index');

Route::get('/contacts', [ContactController::class,'contacts'])->name('contact.index');






