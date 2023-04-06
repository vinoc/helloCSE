<?php

use App\Http\Controllers\ActeurController;
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


Route::get('/', [ActeurController::class, 'home'])->name('homeActeurs');
Route::get('/admin-acteur', [ActeurController::class, 'adminActeurs'])->name('adminActeurs');

Route::get('/admin-acteur/{id}', [ActeurController::class, 'showOneActeur'])->name('showOneActeur');

Route::get('/add-acteur/', [ActeurController::class, 'addActeur'])->name('addActeur');
Route::post('/add-acteur/', [ActeurController::class, 'addActeur'])->name('addActeur');
Route::get('/add-acteur/{id}', [ActeurController::class, 'addActeur'])->name('addActeurId');
Route::post('/add-acteur/{id}', [ActeurController::class, 'addActeur'])->name('addActeurId');
Route::get('/delete-acteur/{id}', [ActeurController::class, 'deleteActeur'])->name('deleteActeurId');
