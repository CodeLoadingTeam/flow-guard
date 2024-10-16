<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ResidentDomicile extends Model
{
    use HasFactory;

    protected $table = 'resident_domicile';

    public $timestamps = false;

    public function resident(): HasMany
    {
        return $this->hasMany(Resident::class);
    }

    public function domicile(): HasMany
    {
        return $this->hasMany(Domicile::class);
    }
}
