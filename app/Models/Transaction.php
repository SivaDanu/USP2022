<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Transaction extends Model
{
    use HasFactory;

    public $table = 'transactions';
    protected $primaryKey = "nota";
    protected $fillable =
    [
        'id',
        'nota',
        'name',
        'type',
        'total',
        'date'
    ];

    // public function detailtrans($nota)
    // {
    //     return DB::table('transactions')->where('nota', $nota)->first();
    // }
}
