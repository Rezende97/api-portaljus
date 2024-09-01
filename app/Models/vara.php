<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Audiencia;

class vara extends Model
{
    use HasFactory;

    protected $table = 'varas';

    protected $fillable = [
        'vara'
    ];

    public function audiencia()
    {
        return $this->belongsTo(Audiencia::class, 'id_varas', 'id');
    }
}
