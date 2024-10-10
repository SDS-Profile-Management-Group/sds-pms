<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'user_profile';
    protected $primaryKey = 'username';

    protected $fillable = [
        'username',
        'full_name',
        'contact_number',
        'alt_email',
    ];
}
