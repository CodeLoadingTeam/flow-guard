<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Resident extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'document',
        'phone_number',
    ];

    public function automobile(): HasMany
    {
        return $this->hasMany(Automobile::class);
    }

    public function domiciles(): BelongsToMany
    {
        return $this->belongsToMany(Domicile::class, ResidentDomicile::class, 'resident_id', 'domicile_id');
    }
}
