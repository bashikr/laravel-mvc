<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Dice\Game;
use App\Http\Controllers\Dice\GameForm;
use App\Http\Controllers\Dice\PlayForm;


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

Route::post('/gameForm', [GameForm::class, 'process'])->name('gameForm');

Route::get('/play', function (Request $request) {

    $playersAmount = $request->session()->get('playersAmount');
    $dicesAmount = $request->session()->get('dicesAmount');
    $game = new Game($playersAmount, $dicesAmount);
    $game->processPlayersArrays();
    $playersHands = $game->getPlayersHands();
    $playersHandSum = $game->playersHandSum();

    $data = [
        'dicesAmount' => $dicesAmount,
        'playersAmount' => $playersAmount,
        'playersHands' => $playersHands,
        'playersHandSum' => $playersHandSum,
    ];

    return view('diceGame/play')->with('data', $data);
})->name('play');


Route::post('/play', [PlayForm::class, 'process'])->name('play');


Route::get('/game', function (Request $request) {

    $play = $request->session()->get('play');
    $reset = $request->session()->get('reset');

    if($play) {
        return view('diceGame/game');
    } elseif ($reset) {
        return view('diceGame/dice100');
    }


})->name('game');



// Route::post('/play', function () {
    // $play = $app->request->getPost("play");
    // $reset = $app->request->getPost("reset");

    // $game = $app->session->get("game");

    // if ($play) {
        // if($game->firstPlayer() == 'Roll again') {
        //     $game->throwAgain();
        //     $app->session->set("playersHands", $game->getPlayersHands());
        //     $app->session->set("playersHandSum", $game->playersHandSum());
        //     $app->session->set("firstPlayer", $game->firstPlayer());
        //     return $app->response->redirect("games-view/dice/play");
        // } else {
        //     $whoWillPlay = $app->session->get('firstPlayer');
        //     $game->processPlayersArrays();
        //     $game->throwAgain();
        //     $app->session->set("playerHand", $game->playerHand($whoWillPlay));
        //     $app->session->set('saveButtonVisibility', 'visible');
        //     $app->session->set("playersHandSum", $game->playersHandSum());
        //     $app->session->set("playerRoundSum", $game->playerRoundSum($whoWillPlay));
        //     $app->session->set("winner", $game->winner($whoWillPlay));

        //     return $app->response->redirect("games-view/dice/game");
        // }
    // } elseif ($reset) {
        // return $app->response->redirect("games-view/dice/init");
    // }
// });

// Route::post('/play', function (Request $request) {

//     $playersAmount = $request->session()->get('playersAmount');
//     $dicesAmount = $request->session()->get('dicesAmount');
//     // $game = new Game($playersAmount, $dicesAmount);

//     $data = [
//         'dicesAmount' => $dicesAmount,
//         'playersAmount' => $playersAmount,
//     ];

//     return view('diceGame/play')->with('data', $data);
// })->name('play');


// Route::get('/play', [Game::class, 'processPlayersArrays'])->name('play');
// Route::get('/play1', [Game::class, 'getPlayersHands'])->name('play');


// Route::get('/play', [Game::class, 'playersHandSum'])->name('play');
// Route::get('/play', [Game::class, 'firstPlayer'])->name('play');


// Auth::routes();
