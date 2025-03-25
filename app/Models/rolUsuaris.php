<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class rolUsuaris extends Model
{
    use HasFactory;

    protected $table = "rol_usuaris";
    protected $primary_key = "id_rol_usuaris";
    public $timestamps = false;

    public function Usuaris()
    {
        return $this->hasMany(Usuaris::class, 'id_rol_usuaris');
    }


}

