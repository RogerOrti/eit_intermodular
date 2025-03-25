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
}
