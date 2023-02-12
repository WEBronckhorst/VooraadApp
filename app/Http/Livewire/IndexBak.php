<?php

namespace App\Http\Livewire;

use App\Models\Bak;
use Livewire\Component;

class IndexBak extends Component
{

    public $baks;


    public function mount()
    {
        $this->baks = Bak::all();
    }
    public function render()
    {
        return view('livewire.index-bak');
    }
}
