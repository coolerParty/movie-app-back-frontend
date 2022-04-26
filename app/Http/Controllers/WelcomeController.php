<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Serie;
use App\Models\Episode;

class WelcomeController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('updated_at', 'desc')->take(8)->get();
        $series = serie::orderBy('created_at', 'desc')->take(8)->get();
        $episodes = Episode::orderBy('created_at', 'desc')->take(8)->get();
        return view('welcome', compact('movies','series','episodes'));
    }
}
