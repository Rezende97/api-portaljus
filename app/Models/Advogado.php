<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Audiencia;

class Advogado extends Model
{
    use HasFactory;

    protected $fillable = [
        'advogado',
        'email',
        'telefone'
    ];

    public function audiencia()
    {
        return $this->belongsTo(Audiencia::class, 'id_adv', 'id');
    }
}
