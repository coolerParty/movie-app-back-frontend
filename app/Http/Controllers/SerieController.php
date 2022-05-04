<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class SerieController extends Controller
{
    use WithPagination;
    
    public function index()
    {
        $series = Serie::withCount('seasons')->orderBy('created_at','desc')->paginate(18);
        return view('series.index', compact('series'));
    }

    public function show(Serie $serie)
    {
        $latests = Serie::withCount('seasons')->orderBy('created_at','desc')->take(9)->get();
        return view('series.show', compact('serie','latests'));
    }

}
