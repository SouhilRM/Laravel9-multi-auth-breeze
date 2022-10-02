<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;//ajout
use Laravel\Sanctum\HasApiTokens;//ajout
use Illuminate\Foundation\Auth\User as Authenticatable;//ajout

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    //on cree un nouveau guard puis tu vas lajouter dans config/auth.php
    protected $guard = 'admin';

    protected $fillable = [
        'name',
        'email',
        'password',
        'stauts',//ajout du statut
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
