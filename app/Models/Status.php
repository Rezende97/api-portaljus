<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Audiencia;

class Status extends Model
{
    use HasFactory;

    protected $table = 'status';

    protected $fillable = [
        'status'
    ];

    public function audiencia()
    {
        return $this->belongsTo(Audiencia::class, 'id_status', 'id');
    }
}
