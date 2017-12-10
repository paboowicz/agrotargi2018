<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'profile'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Profile of the user
     *
     * @var String Description
     */
    public function status() {
        switch ($this->profile) {
            case 1:
                return 'Klient';
                break;
            case 2:
                return 'Administrator';
                break;

            default:
                return 'Gość';
                break;
        }
    }

}
