<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
   
        $movies = Movie::with('directors')->get();
        
        return view('welcome', compact('movies'));
    }
}
