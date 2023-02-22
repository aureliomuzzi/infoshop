<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;
use App\Models\Produto;

class Estoque extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $dates = ['created_at', 'updated_at'];
    protected $table = 'estoque';

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
