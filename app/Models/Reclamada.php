<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Processos;

class Reclamada extends Model
{
    use HasFactory;

    protected $fillable = [
        'reclamada'
    ];

    public function processo()
    {
        return $this->belongsTo(Processos::class, 'id_reclamada', 'id');
    }
}
