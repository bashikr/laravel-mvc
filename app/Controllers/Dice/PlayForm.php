<?php
namespace App\Controllers\Dice;

use Illuminate\Http\Request;

class PlayForm
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
            }
            $whoWillPlay = $request->session()->get('firstPlayer');
            $game->processPlayersArrays();
            $game->throwAgain();
            $request->session()->put('playerHand', $game->playerHand($whoWillPlay));
            $request->session()->put('saveButtonVisibility', 'visible');
            $request->session()->put('playButtonVisibility', 'visible');
            $request->session()->put("playersHandSum", $game->playersHandSum());
            $request->session()->put("playerRoundSum", $game->playerRoundSum($whoWillPlay));
            $request->session()->put("winner", $game->winner($whoWillPlay));
            return redirect("/game");
        } elseif ($reset) {
            return redirect("/dice100");
        }
    }
}
