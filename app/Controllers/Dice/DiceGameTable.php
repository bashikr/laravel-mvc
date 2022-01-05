<?php
namespace App\Controllers\Dice;

use App\Models\Dice\DiceResults;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiceGameTable extends Controller
{
    /**
     * Show a list of all of the application's dice.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $diceResults = DB::table('diceresults')->get();

        return view('guessGame.scores.display', ['diceresults' => $diceResults]);

    }

    /**
     * Store a new high score in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $diceResults = new DiceResults();


        if ($request->session()->get("winner") !== 'No winner yet!')
        {
            $score = $request->session()->get('playersFinalSum');
            $scoreModified = str_replace('<br>', ' ', $score);

            $diceResults->winner = (string) $request->session()->get("winner");
            $diceResults->score = $scoreModified;

            $diceResults->save();

        }
        return redirect("/game");
    }
}
