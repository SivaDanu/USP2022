<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCar extends Model
{
    use HasFactory;

    public $tables = 'typecars';

    protected $fillable =
    [
        'typecar',
        'total'
    ];
}
