<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyMaterial extends Model
{
    use HasFactory;

    // Allow mass assignment for these fields
    protected $fillable = [
        'course',
        'branch',
        'year',
        'material_type',
        'subject',
        'topic',
        'file_path',
    ];
}

