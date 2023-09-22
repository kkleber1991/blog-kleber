<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\BlogController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/post/{post:slug}', [PostController::class, 'showPost'])->name('post');

Route::get('/contato', [ContatoController::class, 'index'])->name('contato');

Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');