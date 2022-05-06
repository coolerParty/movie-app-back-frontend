<?php

namespace App\Http\Livewire;

use App\Models\Movie;
use Livewire\Component;

class Search extends Component
{
    public $showSearchModal =false;
    public $search = '';
    public $searchResults = [];

    public function showSearch()
    {
        $this->showSearchModal = true;
    }

    public function closeSearchModal()
    {
        $this->reset();
    }

    public function updatedsearch()
    {
        $this->searchResults = Movie::search('title',$this->search)->get();
    }

    public function render()
    {
        
        return view('livewire.search');
    }
}
