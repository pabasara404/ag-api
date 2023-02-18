<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;

    public function issuing()
    {
        return $this->morphOne(Issuing::class, 'issuable');
    }

    public function citizen(){
        $this->hasOne(Citizen::class);
    }
}
