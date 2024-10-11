<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enum\RoleEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Log;
use Laravel\Sanctum\HasApiTokens;
use PhpParser\Node\Expr\Throw_;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

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

    /**
     * Assigns a role to the user
     */
    public function assignRole(int|RoleEnum $role): bool
    {
        if (is_int($role)) {
            $newRole = Role::where('id', '=', $role)->first();

            if (! $role) {
                Log::error("Role with the id of {$role} does not exist!");
                return false;
            }

            $this->roles()->attach($newRole->id);
            return true;
        }

        if ($role instanceof RoleEnum) {
            $newRole = Role::where('id', '=', $role->value)->first();

            if (! $newRole) {
                Log::error("Role with the id {$role} does not exist, did you perhaps forget to seed the db?");
                return false;
            }

            $this->roles()->attach($newRole->id);
            return true;
        }
    }

    /**
     * Check if a user has a role
     * 
     * @param RoleEnum|int|array<int, RoleEnum|int> $roles
     */
    public function hasRole(RoleEnum|int|array $roles): bool
    {
        if (!is_array($roles)) {
            $roles = [$roles];
        }

        $roleIds = array_map(function($role) {
            return $role instanceof RoleEnum ? $role->value : $role;
        }, $roles);

        return $this->roles()->whereIn('roles.id', $roleIds)->exists();
    }
}
