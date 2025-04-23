<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Esdeveniment extends Model
{
    use HasFactory;

    protected $table = "esdeveniments";
    protected $primary_key = "id_esdeveniment";
    protected $fillable = ['nom', 'descripcio', 'direccio','imatge'];
    public $timestamp = false;


    public function Exposicio()
    {
        return $this->hasMany(Exposicio::class, 'id_exposicio');
    }

    public function Entrada()
    {
        return $this->belongsTo(Entrada::class, 'foreign_key', 'other_key');
    }
}
