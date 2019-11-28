<?php

namespace App;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Youthreg extends Authenticatable
{
    //
    use Notifiable;

    protected $guard  = 'youthreg';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','name','gender',
         'is_editor', 'email', 
         'password', 'dateofbirth','Address',
         'biometriccap','Qualification','localgovernment',
         'employmentstatus','workexperience',
         'nearestministry','interestarea','is_edited','phonenumber',
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
