<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    use HasFactory;

    protected $table = 'carro_imagens'; // Nome da tabela atualizado

    protected $fillable = ['caminho'];

    public function carro()
    {
        return $this->belongsTo(Carro::class);
    }
}
