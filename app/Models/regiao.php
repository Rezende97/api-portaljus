<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Audiencia;

class regiao extends Model
{
    use HasFactory;

    protected $table = 'regiaos';

    protected $fillable = [
        'regiao'
    ];

    public function audiencia()
    {
        return $this->belongsTo(Audiencia::class, 'id_regiaos', 'id');
    }
}
