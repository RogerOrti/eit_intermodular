<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usuaris extends Model
{
    use HasFactory;

    protected $table = "usuaris";
    protected $primary_key = "id_usuaris";
    public $timestamp = false;


    public function usuaris(): HasMany
    {
        return $this->hasMany(Usuaris::class, 'id_rol_usuaris', 'id_usuaris');
    }
}
