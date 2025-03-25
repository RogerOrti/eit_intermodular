<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horari extends Model
{
    use HasFactory;

    protected $table = "horaris";
    protected $primary_key = "id_horaris";
    public $timestamp = false;
}
