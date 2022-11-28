<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AggrievedParty extends Model
{
    use HasFactory;
    public function specialCompensation(): BelongsTo
    {
        return $this->hasMany(SpecialCompensation::class);
    }
}
