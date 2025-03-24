<?php

namespace App\Models\Education;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Info\Staff;

class Major extends Model
{
    use HasFactory;

    protected $table = 'sds_major';
    protected $primaryKey = 'major_id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'major_id',
        'major_name',
        'leading_staff'
    ];

    public function lead(){
        return $this->belongsTo(Staff::class, 'leading_staff', 'staff_username');
    }
}
