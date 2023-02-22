<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $dates = ['created_at', 'updated_at'];

    const PF = "PF";
    const PJ = "PJ";
    const TIPO = [
        Fornecedor::PF => "Pessoa Física",
        Fornecedor::PJ => "Pessoa Jurídica"
    ];

    public function getTipoFormatadoAttribute()
    {
        return Fornecedor::TIPO[$this->tipo];
    }
}
