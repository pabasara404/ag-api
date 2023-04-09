<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimberCuttingPermitApplication extends Model
{
    use HasFactory;

    public function gn_division(){
        return $this->belongsTo(GnDivision::class);
    }
    public function tree_detail(){
        return $this->belongsTo(TreeDetail::class);
    }
    public function deed_detail(){
        return $this->belongsTo(DeedDetail::class);
    }
    public function land_detail(){
        return $this->belongsTo(LandDetail::class);
    }
    public function boundaries(){
        return $this->belongsTo(Boundaries::class);
    }
    public function tree_count(){
        return $this->belongsTo(TreeCount::class);
    }
    public function citizen(){
        return $this->belongsTo(Citizen::class);
    }
}
