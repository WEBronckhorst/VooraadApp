<?php

namespace App\Http\Livewire;

use App\Models\Produkt;
use Illuminate\Contracts\Session\Session;
use Livewire\Component;

class EditProdukt extends Component
{
    public $name;
    public $code;
    public $description;
    public $produkt;

    protected $rules = [
        'name' => 'required|min:6',
        'description' => 'nullable|min:6',
        'code' => 'required',
    ];

    public function mount(Produkt $produkt)
    {
        $this->produkt = $produkt;
        $this->name = $this->produkt->name;
        $this->code = $this->produkt->code;
        $this->description = $this->produkt->description;
    }

    public function submit()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

        $this->produkt->update([
            'name' => $this->name,
            'code' => $this->code,
            'description' => $this->description,
        ]);
        
        Session()->flash('message', 'Produkt is updated successfully.');
    }
    public function render()
    {
        return view('livewire.edit-produkt');
    }
}
