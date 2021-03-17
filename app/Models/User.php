<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use RistekUSDI\SSO\Models\User as SSOUser;

class User extends SSOUser
{
    use Notifiable;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
}
