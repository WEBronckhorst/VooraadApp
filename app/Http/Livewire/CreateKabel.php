<?php

namespace App\Http\Livewire;

use App\Models\Kabels;
use Livewire\Component;

class CreateKabel extends Component
{
    public $kabels;
    public $types;
    public $subtypes;
    public $type_id;
    public $subtyp_id;
    public $name;
    public $opmerking;

    public $code;
    public $laenge;
    public $Startoort;
    public $eindpoort;
    public $status;

    public function mount()
    {
        $this->kabels = \App\Models\Kabels::all();
        $this->types = \App\Models\type::where('subtyp_id', NULL)->get();
        $this->subtypes = \App\Models\type::where('subtyp_id', $this->type_id)->get();
    }
    public function updated($name, $value)
    {
        if ($name == 'type_id') {
            $this->subtypes = \App\Models\type::where('subtyp_id', $this->type_id)->get();
        }
    }
    protected $rules = [
        'name' => 'required|min:6',
        'opmerking' => 'nullable|min:6',
        'code' => 'required|unique:kabels',
        'laenge' => 'required',
        'Startoort' => 'required',
        'eindpoort' => 'required',
        //  'status' => 'required',
    ];



    public function submit()
    {
        // Session()->flash('message', 'start met aanmekn.');
        $this->validate();


        Kabels::create([
            'name' => $this->name,
            'opmerking' => $this->opmerking,
            'code' => $this->code,
            'type_id' => $this->type_id,
            'subtyp_id' => $this->subtyp_id,
            'laenge' => $this->laenge,
            'Startoort' => $this->Startoort,
            'eindpoort' => $this->eindpoort,
            'status' => 1,
        ]);
        Session()->flash('message', 'Kabel is create successfully.');
    }

    public function render()
    {
        return view('livewire.create-kabel');
    }
}
