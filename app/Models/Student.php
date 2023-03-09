<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        "student_id",
        "name",
        "gender",
        "date_of_birth",
        "father_name",
        "mother_name",
        "other"
    ];

    protected $timestamps = false;
}
