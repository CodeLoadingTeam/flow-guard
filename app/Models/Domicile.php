<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Domicile extends Model
{
    use HasFactory;

    protected $table = 'domiciles';

    protected $fillable = [
        'domicile_number',
        'tower',
    ];

    public function condominium(): BelongsTo
    {
        return $this->belongsTo(Condominium::class);
    }
}
