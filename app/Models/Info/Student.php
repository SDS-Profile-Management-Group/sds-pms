<?php

namespace App\Models\Info;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Education\Major;
use App\Models\User;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student_info';
    protected $primaryKey = 'student_username';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'student_username',
        'student_intake_batch',
        'student_nationality',
        'cgpa',
        'major_id',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'student_username', 'asg_username'); // Adjust the foreign key and local key as needed
    }

    public function major(){
        return $this->belongsTo(Major::class, 'major_id', 'major_id');
    }

    public function modules(){
        return $this->hasMany(ModulesTaken::class, 'student_id', 'student_username');
    }
}
