<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\FavorisController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NewsletterController;

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

Route::get('/', [AppController::class, 'home'])->name('home');

Route::get('/create', [AppController::class, 'annonce_create'])->middleware(['auth', 'verified'])->name('annonce.create');
Route::get('/show/{id}', [AppController::class, 'annonce_show'])->name('annonce.show');
Route::get('/edit/{id}', [AppController::class, 'annonce_edit'])->middleware(['auth', 'verified'])->name('annonce.edit');
Route::get('/delete/{id}', [AppController::class, 'annonce_delete'])->middleware(['auth', 'verified'])->name('annonce.delete');
Route::get('/myAnnonce', [AppController::class, 'myAnnonce'])->middleware(['auth', 'verified'])->name('myAnnonce');

/**
 * -------------------------------------------------------------------------
 * Favoris Routes
 * ------------------------------------------------------------------------
 */

Route::get('/favoris', [FavorisController::class, 'favoris'])->middleware(['auth', 'verified'])->name('favoris');
Route::post('/favoris/{id}', [FavorisController::class, 'favoris_store'])->middleware(['auth', 'verified'])->name('favoris.store');


/**
 * -------------------------------------------------------------------------
 * Favoris Routes
 * ------------------------------------------------------------------------
 */

Route::get('/search/{category}', [SearchController::class, 'category_search'])->name('search.category');
Route::get('/search', [SearchController::class, 'search'])->name('search');



Route::post('/newsletter/create', [NewsletterController::class, 'create_newsletter'])->name('newsletter.create');
Route::get('/newsletter', [NewsletterController::class, 'show'])->name('newsletter.show');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';