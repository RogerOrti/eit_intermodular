<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Esdeveniment extends Model
{
    use HasFactory;

    protected $table = "esdeveniments";
    protected $primary_key = "id_esdeveniment";
    public $timestamp = false;
}
