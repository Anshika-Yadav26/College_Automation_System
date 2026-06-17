<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable; 
use Illuminate\Notifications\Notifiable;

class Student extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'father_name',
        'contact',
        'email',
        'password',
        'dob',
        'gender',
        'college',
        'course',
        'branch',
        'semester',
        'photo',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

}
