<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignUp extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'signups';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'user_id',
        'phone',
        'address',
        'birthplace',
        'birthdate',
        'gender_id',
        'city_id',
        'district_id',
        'family_status_id',
        'child_position',
        'school_id',
    ];

    /**
     * Define the relationship with cities
     */
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }

    /**
     * Define the relationship with districts
     */
    public function district()
    {
        return $this->belongsTo(District::class, 'district_id', 'id');
    }

    /**
     * Define the relationship with users
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Define the relationship with family statuses
     */
    public function familyStatus()
    {
        return $this->belongsTo(FamilyStatus::class, 'family_status_id', 'id');
    }

    /**
     * Define the relationship with schools
     */
    public function school()
    {
        return $this->belongsTo(School::class, 'school_id', 'id');
    }
}
