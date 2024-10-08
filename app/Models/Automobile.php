<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Automobile extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'color',
        'year',
        'plate',
        'plate_mercosul',
    ];

    public function resident(): BelongsTo
    {
        return $this->belongsTo(Resident::class);
    }

    public function entryLog(): HasMany
    {
        return $this->hasMany(AutomobileEntryLog::class);
    }
}
