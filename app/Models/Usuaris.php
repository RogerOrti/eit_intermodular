<?php

namespace App\Models;

use App\Models\Empresa;
use App\Models\Assistent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Usuaris extends Authenticatable
{
    use HasFactory;

    protected $table = "usuaris";
    protected $primaryKey = "id_usuaris";
    public $timestamps = false;

    public function rolUsuari()
    {
        return $this->belongsTo(rolUsuaris::class, 'id_usuaris');
    }

    public function empresa()
    {
        return $this->hasOne(Empresa::class, 'id_usuaris');
    }

    public function assistent()
    {
        return $this->hasOne(Assistent::class, 'id_usuaris');
    }

} 
