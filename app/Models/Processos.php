<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Audiencia;
use App\Models\Reclamante;
use App\Models\Reclamada;

class Processos extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id_reclamante',
        'id_reclamada',
        'num_processo',
        'observacao'
    ];
    
    public function reclamante()
    {
        return $this->hasMany(Reclamante::class, 'id_reclamante', 'id');
    }

    public function reclamada()
    {
        return $this->hasMany(Reclamada::class, 'id_reclamada', 'id');
    }

    public function audiencia()
    {
        return $this->belongsTo(Audiencia::class, 'id_processo', 'id');
    }
}
