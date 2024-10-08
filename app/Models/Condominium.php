<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Condominium extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'street',
        'neighborhood',
        'number',
    ];

    public function domicile(): HasMany
    {
        return $this->hasMany(Domicile::class);
    }
}
