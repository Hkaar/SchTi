<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
        'profile_photo',

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Define the relationship with signups
     */
    public function signups()
    {
        return $this->hasMany(SignUp::class, 'user_id', 'id');
    }

    /**
     * Define the relationship with roles
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_roles');
    }

    /**
     * Define the relationship with groups
     */
    public function groups()
    {
        return $this->belongsToMany(Group::class, 'user_groups');
    }

    /**
     * Define the relationship with student attendances
     */
    public function attendances()
    {
        return $this->hasMany(StudentAttendance::class, 'user_id', 'id');
    }

    /**
     * Checks the level of permission a user has
     *
     * @param  string|array<string>  $names
     */
    public function checkRole(string|array $names): bool
    {
        if (is_string($names)) {
            return $this->role->name === $names;
        }

        return in_array($this->role->name, $names);
    }
}
