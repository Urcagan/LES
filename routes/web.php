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

//Route::prefix('admin')->group(function () {
//    Route::get('/users', function () {
//        // Matches The "/admin/users" URL
//    });
//});


Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/', 'IndexController')->name('home');
});

// Роуты для админки
Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController');
    });

    // Роуты для админки пользователей
    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::post('/', 'StoreController')->name('admin.user.store');
        Route::get('/{user}', 'ShowController')->name('admin.user.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DestroyController')->name('admin.user.destroy');
    });

    // Роуты для CRUD комплексов
    Route::group(['namespace' => 'Complex', 'prefix' => 'complex'], function () {
        Route::get('/', 'IndexController')->name('admin.complex.index');
        Route::get('/create', 'CreateController')->name('admin.complex.create');
        Route::post('/', 'StoreController')->name('admin.complex.store');
        Route::get('/{complex}', 'ShowController')->name('admin.complex.show');
        Route::get('/{complex}/edit', 'EditController')->name('admin.complex.edit');
        Route::patch('/{complex}', 'UpdateController')->name('admin.complex.update');
        Route::delete('/{complex}', 'DestroyController')->name('admin.complex.destroy');
    });

    // Роуты для CRUD установок
    Route::group(['namespace' => 'Plant', 'prefix' => 'plant'], function () {
        Route::get('/', 'IndexController')->name('admin.plant.index');
        Route::get('/create', 'CreateController')->name('admin.plant.create');
        Route::post('/', 'StoreController')->name('admin.plant.store');
        Route::get('/{plant}', 'ShowController')->name('admin.plant.show');
        Route::get('/{plant}/edit', 'EditController')->name('admin.plant.edit');
        Route::patch('/{plant}', 'UpdateController')->name('admin.plant.update');
        Route::delete('/{plant}', 'DestroyController')->name('admin.plant.destroy');
    });

    // Роуты для CRUD агрегатов
    Route::group(['namespace' => 'Unit', 'prefix' => 'unit'], function () {
        Route::get('/', 'IndexController')->name('admin.unit.index');
        Route::get('/create', 'CreateController')->name('admin.unit.create');
        Route::post('/', 'StoreController')->name('admin.unit.store');
        Route::get('/{unit}', 'ShowController')->name('admin.unit.show');
        Route::get('/{unit}/edit', 'EditController')->name('admin.unit.edit');
        Route::patch('/{unit}', 'UpdateController')->name('admin.unit.update');
        Route::delete('/{unit}', 'DestroyController')->name('admin.unit.destroy');
    });
});


Route::group(['namespace' => 'App\Http\Controllers\Complex'], function () {
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


Route::get('/about', [AboutController::class, 'about'])->name('about.index');

Route::get('/contacts', [ContactController::class, 'contacts'])->name('contact.index');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
