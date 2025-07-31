<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentProfile extends TenantScopedModel
{
    protected $fillable = [
        'user_id',
        'tenant_id',
        'roll_number',
        'class',
        'section',
        'dob',
        'gender',
        'address',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
