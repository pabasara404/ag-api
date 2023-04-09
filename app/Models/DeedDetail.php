<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeedDetail extends Model
{
    use HasFactory;
    public function timberCuttingPermitApplication()
    {
        return $this->hasOne(TimberCuttingPermitApplication::class);    }
}
