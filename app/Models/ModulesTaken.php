<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModulesTaken extends Model
{
    use HasFactory;

    protected $table = 'modules_taken';
    protected $primaryKey = ['module_id', 'student_id']; // Define your composite key
    public $incrementing = false; // Disable auto-incrementing since you have a composite key
    protected $keyType = 'string'; // Adjust this if your keys are not strings

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
