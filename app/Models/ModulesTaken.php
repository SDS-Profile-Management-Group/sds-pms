<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModulesTaken extends Model
{
    use HasFactory;

    protected $table = 'modules_taken';

    protected $fillable = [
        'module_id',
        'student_id',
        'status',
        'semester'
    ];

    
    public function student(){
        return $this->belongsTo(StudentInfo::class, 'student_id', 'student_username');
    }
}
