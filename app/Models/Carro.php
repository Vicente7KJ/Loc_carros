<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'marca', 'modelo', 'ano', 'placa', 'cor', 'opcionais', 'status'
    ];

    public function locacoes()
    {
        return $this->hasMany(Locacao::class);
    }

    public function imagens()
    {
        return $this->hasMany(Imagem::class);
    }
}
