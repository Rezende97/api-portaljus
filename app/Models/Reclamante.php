<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamante extends Model
{
    use HasFactory;

    protected $fillable = [
        'reclamante',
        'email',
        'cpf',
        'phone'
    ];
}
