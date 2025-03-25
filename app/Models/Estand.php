<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estand extends Model
{
    use HasFactory;

    protected $table = "estands";
    protected $primary_key = "id_estands";
    public $timestamp = false;
}
