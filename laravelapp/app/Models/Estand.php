<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estand extends Model
{
    use HasFactory;

    protected $table = "estands";
    protected $primaryKey = "id_estands";
    public $timestamps = false;

    public function exposicio()
    {
        return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    }

    public function Horari()
    {
        return $this->belongsToMany(Horari::class,"horaris_has_estands", "horaris_id_horaris", "estands_id_estands");
    }
}

