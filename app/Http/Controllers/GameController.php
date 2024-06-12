<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use DB;

class GameController extends Controller
{
    public function index()
    {
        $games = DB::select('SELECT * FROM `movies` WHERE movie_type_id = 7 AND votes_nr >= 1000 ORDER BY rating DESC LIMIT 50');

        return view('games.index', compact('games'));
    }
}
