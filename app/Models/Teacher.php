<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable; // Correct parent class
use Illuminate\Notifications\Notifiable;

class Teacher extends Authenticatable // Must extend Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'father_name',
        'dob',
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

    protected $casts = [
        'dob' => 'date',
    ];
}