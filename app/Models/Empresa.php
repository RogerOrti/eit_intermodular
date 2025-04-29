<?php

namespace App\Models;

use App\Models\Usuaris;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Empresa extends Model
{
    use HasFactory;

    protected $table = "empreses";
    protected $primaryKey = "id_usuaris";
    public $timestamps = false;

    public function usuari()
    {
        return $this->belongsTo(Usuaris::class, 'id_usuaris', 'id_usuaris');
    }

}
