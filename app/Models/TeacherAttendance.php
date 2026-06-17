<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherAttendance extends Model
{
    use HasFactory;

    protected $table = 'teacher_attendance'; // Ensure this matches your database table name.

    protected $fillable = ['name', 'email', 'gender']; // Add all the fields you need to save.
}
