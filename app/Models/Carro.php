<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;

    // Definindo o relacionamento com as locações
    public function locacoes()
    {
        return $this->hasMany(Locacao::class);
    }
}
