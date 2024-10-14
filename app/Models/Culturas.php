<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Culturas extends Model
{
    use HasFactory;

    protected $table = 'culturas';

    public function strain()
    {
        return $this->belongsTo(Strains::class, 'idStrains', 'id');
    }

      // Relação para obter os filhos
      public function filhos()
      {
          return $this->hasMany(Culturas::class, 'cultura_id', 'id')->where('cultura_id', '!=', 0);
      }
      
}
