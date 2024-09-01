<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Audiencia;

class TipoAudiencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo_audiencia'
    ];

    public function audiencia()
    {
        return $this->belongsTo(Audiencia::class, 'id_tipo_audiencia', 'id');
    }
}
