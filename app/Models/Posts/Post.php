<?php

namespace App\Models\Posts;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'user_id',
        'is_announcement',
        'is_academic',
        'is_on_campus',
        'content',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'asg_username');
    }
}
