<?php

namespace App\Models;

use App\Models\Usuaris;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Assistent extends Model
{
    use HasFactory;

    protected $table = "assistents";
    protected $primary_key = "id_usuaris";
    public $timestamp = false;

    public function usuari()
    {
        return $this->belongsTo(Usuaris::class, 'id_usuaris', 'id_usuaris');
    }

    public function Entrada()
    {
        return $this->belongsTo(Entrada::class);
    }
}
