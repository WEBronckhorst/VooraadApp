<?php

namespace App\Http\Livewire;

use App\Models\Bak;
use Livewire\Component;

class EditBak extends Component
{

    public $name;
    public $code;
    public $description;
    public $baks;

    protected $rules = [
        'name' => 'required|min:6',
        'description' => 'nullable|min:6',
        'code' => 'required|unique:baks',
    ];

    public function mount()
    {
        $this->baks = Bak::all();
    }
    public function submit()
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

        Bak::create([
            'name' => $this->name,
            'code' => $this->code,
            'description' => $this->description,
        ]);
        Session()->flash('message', 'Bak is create successfully.');
    }
    public function render()
    {
        return view('livewire.edit-bak');
    }
}
