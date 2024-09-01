<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Processos;

class Reclamante extends Model
{
    use HasFactory;

    protected $fillable = [
        'reclamante',
        'email',
        'cpf',
        'phone'
    ];

    public function processo()
    {
        return $this->belongsTo(Processos::class, 'id_reclamante', 'id');
    }
}
