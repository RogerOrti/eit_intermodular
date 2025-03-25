<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipusExposicio extends Model
{
    use HasFactory;

    protected $table = "tipus_exposicions";
    protected $primary_key = "id_tipus_exposicions";
    public $timestamp = false;
}
