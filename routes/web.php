<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InhabitantController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [InhabitantController::class, 'index'])->name('inhabitant');
Route::get('create-inhabitant', [InhabitantController::class, 'create'])->name('create.inhabitant');
Route::post('store-inhabitant', [InhabitantController::class, 'store'])->name('store.inhabitant');
Route::get('edit-inhabitant/{id}', [InhabitantController::class, 'edit'])->name('edit.inhabitant');
Route::post('update-inhabitant', [InhabitantController::class, 'update'])->name('update.inhabitant');
Route::post('destroy-inhabitant/{id}', [InhabitantController::class, 'destroy'])->name('destroy.inhabitant');