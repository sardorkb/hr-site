<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    // Define fillable fields
    protected $fillable = [
        'fullname', 
        'age', 
        'address', 
        'phone_number', 
        'job_location', 
        'job_location_type', 
        'position', 
        'has_car', 
        'education', 
        'expected_salary', 
        'upload_resume',
        'status',
        'comments'
    ];
}
