<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipusEmpresa extends Model
{
    use HasFactory;

    protected $table = "tipus_empreses";
    protected $primary_key = "id_tipus_empreses";
    public $timestamp = false;

    public function Empresa()
    {
        return $this->hasMany(Empresa::class, 'id_tipus_empreses');
    }
}
