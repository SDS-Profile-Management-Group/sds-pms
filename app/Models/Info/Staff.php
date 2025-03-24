<?php
// Models/Info/Staff.php
namespace App\Models\Info;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this->belongsTo(User::class, 'staff_username', 'asg_username'); // Adjust the foreign key and local key as needed
    }
}
