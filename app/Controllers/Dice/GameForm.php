<?php
namespace App\Controllers\Dice;

use App\Controllers\Dice\DiceGameTable;
use Illuminate\Http\Request;

class GameForm
{

    public function process(Request $request)
    {
        $play = $request->input('playPlayer');
        $reset = $request->input('reset');
        $save = $request->input('save');

        $diceGameTable = new DiceGameTable();

        if ($play) {
            $game = $request->session()->get("game");

            $request->session()->put("firstPlayer", $game->returnPlayerToStart());
            $whoWillPlay = $request->session()->get('firstPlayer');
            $game->processPlayersArrays();
            $game->throwAgain();
            $request->session()->put("playerHand", $game->playerHand($whoWillPlay));
            $game->playersHandSum();
            $request->session()->put("playerRoundSum", $game->playerRoundSum($whoWillPlay));
            $request->session()->put("winner", $game->winner($whoWillPlay));
            $request->session()->put('saveButtonVisibility', $game->saveButtonVisibility('visible', $whoWillPlay));
            return redirect("/game");
        } elseif ($reset) {
            $request->session()->put('playersFinalSum', null);
            return redirect("/dice100");
        } elseif ($save) {
            $game = $request->session()->get("game");
            $whoWillPlay = $request->session()->get('firstPlayer');
            $game->savePlayerResults($whoWillPlay);
            $request->session()->put("playersFinalSum", $game->playersFinalSum());
            $request->session()->put("winner", $game->winner($whoWillPlay));
            $request->session()->put("playerHand", $game->playerHand($whoWillPlay));
            $request->session()->put('saveButtonVisibility', $game->saveButtonVisibility('save', $whoWillPlay));
            $request->session()->put('playButtonVisibility', $game->playButtonVisibility());

            $diceGameTable->store($request);
            return redirect("/game");
        }
    }
}
