<?php
namespace App\Models\Info;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Education\Major;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staff_info';
    protected $primaryKey = 'staff_username';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'staff_username',
        'staff_type',
        'pl_privilige',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'staff_username', 'asg_username');
    }

    public function leadingMajor(){
        return $this->hasOne(Major::class, 'leading_staff', 'staff_username');
    }
}
