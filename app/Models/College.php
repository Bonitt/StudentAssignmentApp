<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{

    // This is the model for the College table
    protected $fillable = ['name', 'address'];


    use HasFactory;

    public function students()
    {
        // This is the relationship between the College and Student models
        // in this case a college has many students
        return $this->hasMany(Student::class);
    }
}
