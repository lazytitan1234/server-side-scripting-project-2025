<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;

    // Allow mass assignment for these fields, so we can create colleges without specifying every column manually.
    protected $fillable = ['name', 'address'];

    // A college has many students. Simple relationship setup.
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
