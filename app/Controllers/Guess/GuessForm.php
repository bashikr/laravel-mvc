<?php
namespace App\Controllers\Guess;

use App\Models\Guess\Guess;
use App\Models\Guess\GuessException;
use Illuminate\Http\Request;

class GuessForm
{
    public function index(Request $request)
    {
        $guess = new Guess();
        $request->session()->put('guess', $guess);
        $tries = $guess->tries();
        $request->session()->put('tries', $tries);
        $number = $guess->number();
        $request->session()->put('number', $number);
        return redirect('/play-guess');
    }

    public function process(Request $request)
    {
        $guessNumber = $request->input('guess');
        $play = $request->input('doGuess');
        $reset = $request->input('doInit');
        $cheat = $request->input('doCheat');

        if ($play) {
            $request->session()->put('cheat', false);

            $guess = $request->session()->get('guess');

            $request->session()->put('res', null);
            try {
                $makeGuess = $guess->makeGuess($guessNumber, new GuessException("The given number is out of range."));

                $request->session()->put('makeGuess', $makeGuess);
            } catch (GuessException $e) {
                $res = '<p style="color:red; font-weight: 900;">Warning: </p>' . $e->getMessage();
                $request->session()->put('res', $res);
            } catch (\TypeError $e) {
                $res = 'The given number is out of range.';
            }

            $request->session()->put('tries', $request->session()->get('tries')-1);

            if ($request->session()->get('makeGuess') == "CORRECT") {
                return redirect("/win-guess");
            } elseif ($request->session()->get('tries') < 1) {
                return redirect("/fail-guess");
            }
            return redirect('/play-guess');
        } elseif ($cheat) {
            $request->session()->get('number');
            $request->session()->put('cheat', true);

            return redirect('/play-guess');
        } elseif ($reset) {
            $request->session()->put('guess', null);
            $request->session()->put('cheat', false);
            $request->session()->put('number', null);
            $request->session()->put('res', null);
            $request->session()->put('makeGuess', null);
            $request->session()->put('tries', 6);

            return redirect('/start-guess');
        };

    }
}
