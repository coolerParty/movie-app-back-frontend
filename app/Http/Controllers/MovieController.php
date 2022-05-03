<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class MovieController extends Controller
{
    use WithPagination;
    
    public function index()
    {
        $movies = Movie::orderBy('created_at','desc')->paginate(18);
        return view('movies.index',compact('movies'));
    }

    public function show(Movie $movie)
    {
        $latest = Movie::orderBy('created_at','DESC')->take(9)->get();
        return view('movies.show', compact('movie','latest'));
    }
}
