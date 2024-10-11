<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignUpFamily extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'signup_families';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'signup_id',
        'family_member_type_id',
        'name',
        'phone',
        'signup_job_id',
    ];

    /**
     * Define the relationship with signup jobs
     */
    public function job()
    {
        return $this->belongsTo(SignUpJob::class, 'signup_job_id', 'id');
    }

    /**
     * Define the relationship with family member types
     */
    public function type()
    {
        return $this->belongsTo(FamilyMemberType::class, 'family_member_type_id', 'id');
    }
}
