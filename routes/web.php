<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\IngredientCategoryController;

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
    return view('auth.login');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('suppliers', SupplierController::class)->middleware('auth');
Route::resource('ingredient_categories', IngredientCategoryController::class)->except('show')->middleware('auth');
Route::resource('ingredients', IngredientController::class)->middleware('auth');


require __DIR__.'/auth.php';
