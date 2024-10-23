<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    use HasFactory;

    protected $table = 'student_info';
    protected $primaryKey = 'student_username';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'student_username',
        'student_intake_batch',
        'student_type',
    ];

}
