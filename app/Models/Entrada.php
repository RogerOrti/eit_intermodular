<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;

    protected $table = "tipus_empreses";
    protected $primary_key = ["id_assistent", "id_esdeveniment", "data"];
    public $timestamp = false;

    public function assistent()
    {
        return $this->belongsTo(Assistent::class);
    }
    public function esdeveniment()
    {
        return $this->belongsTo(Esdeveniment::class);
    }
}
