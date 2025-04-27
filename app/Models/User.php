<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Models\Info\Staff;
use App\Models\Info\Student;
use App\Models\Profile;
use App\Models\Resource\File;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    public function userProfile() {
        return $this->hasOne(Profile::class, 'username', 'asg_username');
    }

    public function studentInfo(){
        return $this->hasOne(Student::class, 'student_username', 'asg_username');
    }

    public function staffInfo(){
        return $this->hasOne(Staff::class, 'staff_username', 'asg_username');
    }

    public function files(){
        return $this->hasMany(File::class, 'asg_username', 'asg_username');
    }

    public function profilePicture(){
        return $this->hasOne(File::class, 'asg_username', 'asg_username')->where('type', 'profile_picture');
    }
    
    protected $fillable = [
        'asg_username',
        'email',
        'password',
        'user_type',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
