<?php

namespace App\Http\Livewire;

use Livewire\Component;

class IndexKabel extends Component
{

    public $kabels;

    public function mount()
    {
        $this->kabels = \App\Models\Kabels::all();
    }

    public function render()
    {
        return view('livewire.index-kabel');
    }
}
