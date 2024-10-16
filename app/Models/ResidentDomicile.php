<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ResidentDomicile extends Pivot
{
    use HasFactory;

    protected $table = 'resident_domicile';

    protected $primaryKey = ['resident_id', 'domicile_id'];

    public $timestamps = false;
    
    public $incrementing = false;

    public function resident(): BelongsTo
    {
        return $this->belongsTo(Resident::class);
    }

    public function domicile(): BelongsTo
    {
        return $this->belongsTo(Domicile::class);
    }
}
