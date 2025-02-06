<?php

namespace App\Models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\UBD\Modules;

class ModulesTaken extends Model
{
    use HasFactory;

    protected $table = 'taken_modules';
    public $incrementing = false; // Required because composite keys are used

    protected $primaryKey = ['module_id', 'student_id']; // Informational (Laravel won't natively handle composite keys)
    
    protected $fillable = [
        'module_id', 
        'student_id',

        'chosen_mod_classification',
        'grade',
        'status', 
    ];

    public function student(){
        return $this->belongsTo(StudentInfo::class, 'student_id', 'student_username');
    }

    public function module() {
        return $this->belongsTo(Modules::class, 'module_id', 'module_id');
    }
}
