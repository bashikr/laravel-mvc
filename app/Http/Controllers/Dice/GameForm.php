<?php
namespace App\Http\Controllers\Dice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GameForm extends Controller
{
    public function process(Request $request)
    {
        $playersAmount = $request->input('playersAmount');
        $dicesAmount = $request->input('dicesAmount');

        return redirect('/play')->with('playersAmount', $playersAmount)
            ->with('dicesAmount', $dicesAmount);
    }
}
