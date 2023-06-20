<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');


// Rotta registrazioni
Route::get('/login-register',[PublicController::class, 'registerLogin'])->name('registerLogin');

// Rotte articoli
Route::get('/create/article', [ArticleController::class,'create'])->name('create');