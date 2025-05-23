<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horari extends Model
{
    use HasFactory;

    protected $table = "horaris";
    protected $primaryKey = "id_horaris";
    public $timestamps = false;

    public function Estand()
    {
        return $this->belongsToMany(Estand::class, "horaris_has_estands", "estands_id_estands","horaris_id_horaris");
    }

}
