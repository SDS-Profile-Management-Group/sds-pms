<?php

namespace App\Models\Resource;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = ['asg_username', 'file_name', 'file_path', 'type'];

    public function user()
    {
        return $this->belongsTo(User::class, 'asg_username', 'asg_username');
    }
}
