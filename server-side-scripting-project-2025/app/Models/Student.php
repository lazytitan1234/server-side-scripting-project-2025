<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    /**
     * allow mass assignment for these fields.
     * keeps things simple when creating/updating students.
     */
    protected $fillable = ['name', 'email', 'phone', 'dob', 'college_id'];

    /**
     * a student belongs to one college.
     * makes it easy to fetch the student's college info.
     */
    public function college()
    {
        return $this->belongsTo(College::class);
    }
}
