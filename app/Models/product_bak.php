<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_bak extends Model
{
    use HasFactory;

    protected $fillable = [
        'produkt_id',
        'bak_id',
    ];
}
