<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contractor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nip',
        'regon',
        'nazwa',
        'platnik',
        'ulica',
        'nrDomu',
        'nrMieszkania',
    ];
}
