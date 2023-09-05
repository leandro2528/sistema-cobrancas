<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collector extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'endereco',
        'idade',
        'cpf',
        'telefone',
        'rg',
        'id_collector'
    ];

    public function clients() {
        return $this->belongsTo(Client::class, 'id_collector');
    }
}
