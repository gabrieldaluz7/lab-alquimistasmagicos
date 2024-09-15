<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    // Defina a tabela e as colunas (caso não queira migrations)
    protected $table = 'usuarios';
    protected $fillable = ['nome', 'email', 'senha'];
    public $timestamps = false;
}