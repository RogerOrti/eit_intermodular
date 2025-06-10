<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipusExposicio extends Model
{
    use HasFactory;

    protected $table = "tipus_exposicions";
    protected $primaryKey = "id_tipus_exposicions";
    public $timestamps = false;

    public function Exposicions()
    {
        return $this->hasMany(Exposicio::class, 'id_tipus_exposicions');
    }
}
