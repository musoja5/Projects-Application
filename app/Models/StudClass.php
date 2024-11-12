<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudClass extends Model

{
    use HasFactory;

    protected $fillable = [
        'class_name',
        'stud_number',
        'year',
        'year_end', // Ensure this field is fillable
        'cse_cmd',
    ];
 // Define the relationship with the Student modelyear_end
    public function students()
    {
        return $this->hasMany(Student::class, 'class_name', 'class_name');
    }
}
