<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'dob', 'address',
        'city', 'state', 'country',
        'phonenumber', 'semester',
        'clgname', 'course', 'role',
        'pid', 'cover', 'avtar', 'email'];

    protected $hidden = ['created_at', 'updated_at', 'user_id'];

    
}
