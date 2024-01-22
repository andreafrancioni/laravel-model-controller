<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $dati = config("data");
        $movies = Movie::all();
        return view('home', compact("dati", "movies"));
    }
}
