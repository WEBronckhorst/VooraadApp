<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabel_bak extends Model
{
    use HasFactory;

    protected $fillable = [
        'kabels_id',
        'bak_id',
    ];
}
