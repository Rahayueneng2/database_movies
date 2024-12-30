<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password', 'role_id'];

    public $incrementing = false;
    protected $keyType = 'string';

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}