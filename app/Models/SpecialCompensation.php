<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialCompensation extends Model
{
    use HasFactory;
    public function AggrievedParty(): HasOne
    {
//        return $this->belongsTo(AggrievedParty::class);
    }
}
