<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exposicio extends Model
{
    use HasFactory;

    protected $table = "exposicions";
    protected $primary_key = "id_exposicions";
    public $timestamp = false;

    public function TipusExposicio ()
    {
        return $this->belongsTo(TipusExposicio::class, 'id_exposicio', 'id_tipus_exposicions');
    }

    public function Esdeveniment()
    {
        return $this->belongsTo(Esdeveniment::class, 'id_exposicio', 'id_esdeveniment');
    }

}
