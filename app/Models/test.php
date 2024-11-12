<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = [
        'class_name',
        'stud_svc_no',
        'rank',
        'stud_fname',
        'stud_lname',
        'stud_email',
        'stud_phone',
        'pname',
        'pdescription',
        'file',
    ];

}
