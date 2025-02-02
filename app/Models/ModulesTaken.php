<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModulesTaken extends Model
{
    use HasFactory;

    protected $table = 'modules_taken';
    public $incrementing = false; // Required because composite keys are used

    protected $primaryKey = ['module_id', 'student_id']; // Informational (Laravel won't natively handle composite keys)
    
    protected $fillable = [
        'module_id', 
        'student_id', 
        'module_type',
        'status', 
        'semester'
    ];

    
    public function student(){
        return $this->belongsTo(StudentInfo::class, 'student_id', 'student_username');
    }
}
