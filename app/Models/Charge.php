<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id',
        'cobrador_id',
        'data_cobranca',
        'valor_emprestado',
        'valor_pagar',
        'valor_dia',
        'total_parcelas',
        'parcela_atual',
        'data_vencimento',
        'status_pagamento',
        'observacoes',
    ];

    public function clients() {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function collector() {
        return $this->belongsTo(Collector::class, 'collector_id');
    }
}
