<?php

namespace App;

use App\Model\Role;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'date_of_birth',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function socialProviders()
    {
        return $this->hasMany(SocialProvider::class);
    }
    public function role()
    {
        return $this->hasMany(Role::class);
    }
    public function isAdmin()
    {
        if($this->user()->role->name == 'Admin')
        {
            return true;
        }
        return false;
    }
}
