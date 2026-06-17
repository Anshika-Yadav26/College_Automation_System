<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; // Correct parent class
use Illuminate\Notifications\Notifiable;

class Parents extends Authenticatable 
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'child_name',
        'gender',
        'contact',
        'email',
        'password',
        'photo',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

}
