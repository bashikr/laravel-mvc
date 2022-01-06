<?php

use App\Controllers\Dice\GameForm;
use App\Controllers\Dice\PlayForm;
use App\Controllers\Dice\StartForm;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request as req;

use App\Controllers\Guess\GuessForm;
use App\Controllers\Guess\WinForm;
use App\Controllers\Guess\FailForm;

use App\Controllers\Books\BooksTable;
use App\Controllers\Dice\DiceGameTable;

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

Route::get('/dice100', function (req $request) {
    $request->session()->put('playersFinalSum', null);
    return view('diceGame/dice100');
})->name('dice100');

Route::post('/dice100', [StartForm::class, 'process'])->name('startForm');

Route::get('/play', function () {
    return view('diceGame/play');
})->name('play');

Route::post('/play', [PlayForm::class, 'process'])->name('play');

Route::get('/game', function (req $request) {
    $game = $request->session()->get("game");
    $request->session()->put("firstPlayer1", $game->returnPlayerToStart());

    return view('diceGame/game');
})->name('game');

Route::post('/game', [GameForm::class, 'process'])->name('game');

// Auth::routes();


Route::get('/start-guess', function () {
    return view('guessGame/landing');
})->name('start-guess');

Route::post('/start-guess', [GuessForm::class, 'index'])->name('start-guess');


Route::get('/play-guess', function () {
    return view('guessGame/play');
})->name('play-guess');

Route::post('/play-guess', [GuessForm::class, 'process'])->name('play-guess');


Route::get('/win-guess', function () {
    return view('guessGame/win');
})->name('win-guess');

Route::post('/win-guess',[WinForm::class, 'process'])->name('win-guess');


Route::get('/fail-guess', function () {
    return view('guessGame/fail');
})->name('fail-guess');

Route::post('/fail-guess',[FailForm::class, 'process'])->name('fail-guess');



Route::get('books',  [BooksTable::class, 'index'])->name('books');

Route::get('scores',  [DiceGameTable::class, 'index'])->name('scores');
