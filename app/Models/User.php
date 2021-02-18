<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Vizir\KeycloakWebGuard\Models\KeycloakUser;

class User extends KeycloakUser
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'given_name',
        'family_name',
        'preferred_username',
        'email',
        'sub',
    ];

    /**
     * Get the value of the model's primary key.
     * 
     * @return mixed
     */
    public function getKey()
    {
        return $this->attributes['sub'];
    }
}
