<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processos extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_reclamante',
        'id_reclamada',
        'num_processo',
        'observacao'
    ];
}
