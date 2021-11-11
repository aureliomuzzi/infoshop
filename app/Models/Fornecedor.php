<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    protected $table = 'fornecedor';
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $dates = ['created_at', 'updated_at'];

    const PF = "PF";
    const PJ = "PJ";
    const TIPO = [
        Fornecedor::PF => "Pessoa Física",
        Fornecedor::PJ => "Pessoa Jurídica"
    ];

    const STATUS_ATIVO = 1;
    const STATUS_INATIVO = 0;
    const STATUS = [
        Fornecedor::STATUS_ATIVO => "Ativo",
        Fornecedor::STATUS_INATIVO => "Inativo"
    ];

    public function getTipoFormatadoAttribute()
    {
        return Fornecedor::TIPO[$this->tipo];
    }

    public function getStatusFormatadoAttribute()
    {
        return Fornecedor::STATUS[$this->status];
    }

}
