<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locacao extends Model
{
    use HasFactory;

    protected $table = 'locacoes';  // Especifica o nome correto da tabela

    public function carro()
    {
        return $this->belongsTo(Carro::class); // uma Locação pertece a um carro
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);  // uma Locação pertece a um cliente
    }
}
