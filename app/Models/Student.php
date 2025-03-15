<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // This is the model for the Student table
    protected $fillable = ['name', 'email', 'phone', 'dob', 'college_id'];

    use HasFactory;

    public function college()
    {
        // This is the relationship between the College and Student models
        // in this case a student belongs to a college
        return $this->belongsTo(College::class);
    }
}
