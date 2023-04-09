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
    protected $attributes = [
        'role_type' => 5,
    ];
    public static array $roleTypes = [
        1 => 'Field Officer',
        2 => 'Grama Niladari',
        3 => 'Employee',
        4 => 'Admin',
        5 => 'Client',
        6 => 'Executive',
        7 => 'Samurdhi Officer',
        8 => 'Excise Department',
        9 => 'Department of Revenue',
        10 => 'Chief Clerk',
    ];

    public function getRoleTypeAttribute(){
        return self::$roleTypes[$this->role_type];
    }
    public function setRoleTypeAttribute(string $roleType){
        return array_search($roleType, self::$roleTypes);
    }
}
