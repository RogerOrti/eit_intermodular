<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Esdeveniment extends Model
{
    use HasFactory;

    protected $table = "esdeveniments";
    protected $primaryKey = "id_esdeveniment";
    protected $fillable = ['nom', 'descripcio', 'direccio', 'data_inici', 'data_fi','imatge'];
    public $timestamps = false;


    public function Exposicio()
    {
        return $this->hasMany(Exposicio::class, 'id_exposicio');
    }

    public function Entrada()
    {
        return $this->belongsTo(Entrada::class, 'foreign_key', 'other_key');
    }
}
