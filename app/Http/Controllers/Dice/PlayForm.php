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

        return redirect('/game')->with('play', $play)
            ->with('reset', $reset);
    }
}
