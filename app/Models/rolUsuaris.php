<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class rolUsuaris extends Model
{
    use HasFactory;

    protected $table = "rol_usuaris";
    protected $primary_key = "id_rol_usuaris";

    public $timestamps = false;



    /**
     * Get the user that owns the rolUsuaris
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'foreign_key', 'other_key');
    }
}

