<?php

namespace App\Models;

use App\Models\Empresa;
use App\Models\Assistent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usuaris extends Model
{
    use HasFactory;

    protected $table = "usuaris";
    protected $primary_key = "id_usuaris";
    public $timestamp = false;

    public function rolUsuari()
    {
        return $this->belongsTo(rolUsuaris::class, 'id_usuaris','id_rol_usuaris');
    }

    public function empresa()
    {
        return $this->hasOne(Empresa::class, 'id_usuaris', 'id_usuaris');
    }

    public function assistent()
    {
        return $this->hasOne(Assistent::class, 'id_usuaris', 'id_usuaris');
    }

} 
