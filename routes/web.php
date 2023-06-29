<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Invokable\TestController;
use App\Http\Controllers\MathController;
use App\Http\Controllers\ProductController;
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

/*Route::get('/', function () {
    return '<h1>Hello world</h1>';
});*/
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('products', function () {

});

/*Route::match(['get', 'post'], '/categories', function () {
    return 'Categories page';
});

Route::any('/users', function () {
    return 'One handler for every http methods';
});*/

Route::get('/hello/{name?}', [HomeController::class, 'sayHello'])->name('hello');

Route::prefix('/categories')->group(function () {
    Route::get('', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('{id}/show', [CategoryController::class, 'show'])->name('categories.show');
    Route::delete('{id}', [CategoryController::class, 'delete'])->name('categories.delete');
    Route::get('create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('{id}/update', [CategoryController::class, 'update'])->name('categories.update');




    /*Route::prefix('do')->group(function () {
        Route::get('something', [CategoryController::class, 'something']);
        Route::get('anything', CategoryController::class . '@anything');
    });*/
});

Route::resource('products', ProductController::class);

Route::get('test', TestController::class);

Route::get('math/sum/{a}/{b}', [MathController::class, 'sum']);
