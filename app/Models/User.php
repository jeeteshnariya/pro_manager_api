<?php

namespace App\Models;

use App\Models\profile;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'created_at',
        'updated_at',
        'email_verified_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profiles()
    {
        return $this->hasOne(profile::class);
    }

    public function roles()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
   
    // public function getFullAddress()
    // {
    //     return "{$this->address} {$this->city} {$this->state} {$this->country}";
    // }

    // public function fulladdress()
    // {
    //     $address = profile::get();

    //     foreach ($address as $key => $value) {
    //         echo $value->getFullAddress;
    //     }
    // }
}
