<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleMajorRelation extends Model
{
    use HasFactory;

    protected $table = 'module_belongs_to';
    protected $primaryKey = ['module_id', 'major_id'];
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'module_id',
        'major_id',
        'module_type',
        'shared_among_majors',
        'all_participating_majors'
    ];
}
