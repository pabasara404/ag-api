<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_type',
    ];

    public static array $roleTypes = [
        1 => 'Field Officer',
        2 => 'Grama Niladari',
        3 => 'Employee',
        4 => 'Citizen'
    ];

    public function getRoleTypeAttribute(){
        return self::$roleTypes[$this->role_type];
    }
    public function setRoleTypeAttribute(string $roleType){
        return array_search($roleType, self::$roleTypes);
    }
}
