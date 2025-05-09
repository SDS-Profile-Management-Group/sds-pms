<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $table = 'modules';
    protected $primaryKey = 'module_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'module_id',
        'module_name',
        'mc',
        'level'
    ];
}
