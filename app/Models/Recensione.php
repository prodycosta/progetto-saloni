<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Recensione extends Model
{
    use HasFactory;
    protected $table = 'recensioni';
    protected $fillable = [
        'nome',
        'recensione',
        'data_recensione',
        'salone_id',
        'voto', // Se c'è una relazione con il salone
    ];

    protected $casts = [
        'data_recensione' => 'datetime',
    ];

    public function salone()
    {
        return $this->belongsTo(Salone::class);
    }
}
