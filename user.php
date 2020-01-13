<?php

namespace App;

use Laravolt\Suitable\AutoSort;
use Laravolt\Suitable\AutoFilter;
use Illuminate\Notifications\Notifiable;

class User extends \Laravolt\Platform\Models\User
{
    use Notifiable;
    use AutoFilter;
    use AutoSort;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $fillable = ['name', 'email', 'password', 'status', 'timezone'];
}
