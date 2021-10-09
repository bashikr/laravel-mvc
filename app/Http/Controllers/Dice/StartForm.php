<?php
namespace App\Http\Controllers\Dice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StartForm extends Controller
{
    public function process(Request $request)
    {
        $playersAmount = $request->input('playersAmount');
        $dicesAmount = $request->input('dicesAmount');

        $game = new Game($playersAmount, $dicesAmount);
        $request->session()->put('game', $game);

        $game->processPlayersArrays();

        $playersHands = $game->getPlayersHands();
        $request->session()->put("playersHands", $playersHands);
        $playersHandSum = $game->playersHandSum();
        $request->session()->put("playersHandSum", $playersHandSum);
        $request->session()->put("firstPlayer", $game->firstPlayer());

        return redirect('/play');
    }
}
