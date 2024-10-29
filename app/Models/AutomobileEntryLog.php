<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AutomobileEntryLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'action',
        'created_at',
    ];

    public function automobile(): BelongsTo
    {
        return $this->belongsTo(Automobile::class);
    }
}
