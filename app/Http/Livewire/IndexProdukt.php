<?php

namespace App\Http\Livewire;

use Livewire\Component;

class IndexProdukt extends Component
{
    public $produckts;

    public function mount()
    {
        $this->produckts = \App\Models\Produkt::all();
    }
    public function render()
    {
        return view('livewire.index-produkt');
    }
}
