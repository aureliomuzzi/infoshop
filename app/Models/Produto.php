<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $table = 'produtos';
    use HasFactory;
}
