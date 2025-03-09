<?php

namespace App\Models\UBD;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleBelongsTo extends Model
{
    use HasFactory;

    protected $table = 'module_belong_to';
    public $incrementing = false;
    
    protected $primaryKey = ['module_id', 'major_id'];

    protected $fillable = [
        'module_id',
        'major_id',
        'module_type',
        'is_required_in_other_majors',
        'other_required_majors'
    ];
}
