<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'endereco',
        'empresa',
        'idade',
        'cpf',
        'telefone',
        'valor_empresatado',
        'dias_pagamento'
    ];
}
