<?php
namespace App\Http\Controllers\Dice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlayForm extends Controller
{
    public function process(Request $request)
    {
        $play = $request->input('play');
        $reset = $request->input('reset');

        $game = $request->session()->get("game");

        if($play) {
            if($game->firstPlayer() == 'Roll again') {
                $game->throwAgain();
                $request->session()->put('playersHands', $game->getPlayersHands());
                $request->session()->put('playersHandSum', $game->playersHandSum());
                $request->session()->put('firstPlayer', $game->firstPlayer());
                $playersAmount = $request->session()->get('playersAmount');
                $dicesAmount = $request->session()->get('dicesAmount');
                return redirect("/play")->with('playersAmount', $playersAmount)->with('dicesAmount', $dicesAmount);
            } else {
                $whoWillPlay = $request->session()->get('firstPlayer');
                $game->processPlayersArrays();
                $game->throwAgain();
                $request->session()->put('playerHand', $game->playerHand($whoWillPlay));
                $request->session()->put('saveButtonVisibility', 'visible');
                $request->session()->put("playersHandSum", $game->playersHandSum());
                $request->session()->put("playerRoundSum", $game->playerRoundSum($whoWillPlay));
                $request->session()->put("winner", $game->winner($whoWillPlay));
                return redirect("/game");
            }
        } elseif ($reset) {
            return redirect("/dice100");
        }

        // return redirect('/game')->with('play', $play)
        //     ->with('reset', $reset);
    }
}
