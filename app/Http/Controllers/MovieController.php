<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use DB;

class MovieController extends Controller
{
    public function index()
    {
        //$movies = DB::select('SELECT * FROM `movies` WHERE movie_type_id = 1 AND votes_nr >= 10000 ORDER BY rating DESC LIMIT 50');

            Movie::where('votes_nr', '>=', 10000)
            ->limit(20)
            ->orderBy('name')
            ->get();

            $movie = Movie::findOrFails(1);

            return view('movies.index', compact('movies'));

            // $movies_query = Movie::limit(15);

            // if (isset($_GET['order'])) {
            //     $movies_query->orderBy('year', $_GET['order']);

            // }

            // $movies = movies_query->get();

        
    }
}
