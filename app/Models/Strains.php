<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Strains extends Model
{
    use HasFactory;

    protected $table = 'strains';

    public function culturas()
    {
        return $this->hasMany(Culturas::class, 'idStrains', 'id');
    }


}
