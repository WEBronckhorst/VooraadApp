<?php

namespace App\Http\Livewire;

use App\Http\Controllers\ProductBakController;
use App\Models\Kabel_bak;
use App\Models\product_bak;
use Livewire\Component;
use Termwind\Components\Dd;

class DingInBak extends Component
{

    public $ding = 1;
    public $dingx;
    public $kabel;
    public $code;

    public $kabel_code;
    public $produk;
    public $produkt_code;
    public $bak;
    public $bak_code;

    public function getDing()
    {
        if ($this->ding == 1) {
            $this->produk = \App\Models\Produkt::where('code', $this->code)->first();
            $this->dingx = 'produk';
        } elseif ($this->ding == 2) {
            $this->kabel = \App\Models\Kabels::where('code', $this->code)->first();
            $this->dingx = 'kabel';
        }
    }
    public function getBak()
    {
        $this->bak = \App\Models\Bak::where('code', $this->bak_code)->first();
    }

    public function kopple()
    {
        if ($this->bak != null && $this->dingx != null) {
            if ($this->dingx == 'produk') {
                product_bak::updateOrCreate(
                    ['produkt_id' => $this->produk->id,],
                    ['bak_id' => $this->bak->id,]
                );
                session()->flash('message', 'Koppeling van ban en prudukt is aan gemaakt');
            } elseif ($this->dingx == 'kabel') {
                Kabel_bak::updateOrCreate(
                    ['kabels_id' => $this->kabel->id,],
                    ['bak_id' => $this->bak->id,]
                );
                session()->flash('message', 'Koppeling van ban en kabel is aan gemaakt');
            }
        }

        # code...
    }


    public function render()
    {
        return view('livewire.ding-in-bak');
    }
}
