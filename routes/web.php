<?php

use App\Controllers\Dice\GameForm;
use App\Controllers\Dice\PlayForm;
use App\Controllers\Dice\StartForm;
use Illuminate\Http\Request;
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
})->name('home');

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/game21', function () {
    return view('game21');
})->name('game21');

Route::get('/dice100', function () {
    return view('diceGame/dice100');
})->name('dice100');

Route::post('/dice100', [StartForm::class, 'process'])->name('startForm');

Route::get('/play', function () {
    return view('diceGame/play');
})->name('play');

Route::post('/play', [PlayForm::class, 'process'])->name('play');

Route::get('/game', function (Request $request) {
    $game = $request->session()->get("game");
    $request->session()->put("firstPlayer1", $game->returnPlayerToStart());

    return view('diceGame/game');
})->name('game');

Route::post('/game', [GameForm::class, 'process'])->name('game');

// Auth::routes();
