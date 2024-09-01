<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Processos;
use App\Models\TipoAudiencia;
use App\Models\vara;
use App\Models\regiao;
use App\Models\Advogado;
use App\Models\Status;

class Audiencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_processo',
        'id_tipo_audiencia',
        'id_varas',
        'id_regiaos',
        'id_adv',
        'id_status',
        'data_horario_audiencia',
        'finished',
    ];

    public function processo()
    {
        // relacionamento de um para um
        return $this->hasOne(Processos::class, 'id_processo', 'id');
    }

    public function tipoAudiencia()
    {
        // relacionamento de um para muitos
        return $this->hasMany(TipoAudiencia::class, 'id_tipo_audiencia', 'id');
    }

    public function vara()
    {
        return $this->hasMany(vara::class, 'id_varas', 'id');
    }

    public function regiao()
    {
        return $this->hasMany(regiao::class, 'id_regiaos', 'id');
    }

    public function advogado()
    {
        return $this->hasMany(Advogado::class, 'id_adv', 'id');
    }

    public function status()
    {
        return $this->hasMany(Status::class, 'id_status', 'id');
    }
}