<?php

use App\Http\Controllers\SearchController;
use App\Http\Controllers\GameController;
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
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth'])->name('profile');

Route::get('/games', [GameController::class, 'listGames'])->name('games');

Route::get('/wishlist', function () {
    return view('wishlist');
})->name('wishlist');

Route::get('/search-results',[SearchController::class, 'search']);

require __DIR__.'/auth.php';
