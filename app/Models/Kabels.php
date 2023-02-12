<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabels extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'opmerking',
        'code',
        'laenge',
        'type_id',
        'subtyp_id',
        'Startoort',
        'eindpoort',
        'status',
    ];
    public function Type()
    {
        return $this->belongsTo(Type::class);
    }
    public function SubType()
    {
        return $this->belongsTo(Type::class, 'subtyp_id');
    }

    public function Bak()
    {
        return $this->belongsToMany(Bak::class, 'kabel_baks', 'kabels_id', 'bak_id');
    }
}
