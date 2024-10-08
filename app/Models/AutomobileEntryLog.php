<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AutomobileEntryLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'action',
    ];

    public function automobile(): HasMany
    {
        return $this->hasMany(Automobile::class);
    }
}
