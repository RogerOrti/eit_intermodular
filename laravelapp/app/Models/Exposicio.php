<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exposicio extends Model
{
    use HasFactory;

    protected $table = "exposicions";
    protected $primaryKey = "id_exposicions";
    public $timestamps = false;

    public function TipusExposicio ()
    {
        return $this->belongsTo(TipusExposicio::class,'id_tipus_exposicions');
    }

    public function Esdeveniment()
    {
        return $this->hasMany(Esdeveniment::class, 'id_exposicio');
    }

}
