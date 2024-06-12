<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShawshankRedemption;
use DB;

class ShawshankRedemptionController extends Controller
{
    public function index()
    {
        $shawshankredeption = DB::select('SELECT * FROM `movies` WHERE name = `%Shawshank%` LIMIT 1');

        return view('shawshankredemption.index', compact('shawshankredemption'));
    }
}
